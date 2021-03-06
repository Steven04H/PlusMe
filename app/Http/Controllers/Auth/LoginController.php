<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;
use Socialite;
use Exception;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    //authentication for activation, admin and user banned redirects
    public function authenticated(Request $request, $user)
    {
        if (!$user->is_activated) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }elseif($user->is_admin){
            return redirect('/admin');
        }elseif($user->is_Banned){
            auth()->logout();
            return back()->with('warning', 'Sorry you no longer will be unable to login with this account, please contact plusme support for more information.');
        }
        return redirect()->intended($this->redirectPath());
    }

    
    /**
     * Redirect the user to the Google authentication page.
    *
    * @return \Illuminate\Http\Response
    */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

      /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('sorry try again');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->first_name      = $user->user['name']['givenName'];
            $newUser->last_name       = $user->user['name']['familyName'];
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->password        = bcrypt(rand(60,60));
            $newUser->avatar          = "profile.png";
            $newUser->avatar_original = $user->avatar_original;
            $newUser->terms = 1;
            $newUser->is_activated = 1;
            $newUser->save();
            auth()->login($newUser, true);
        }
        return redirect()->to('/dashboard');
    }

}
