@include('layouts.partials.head')
<style>

#wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

#wrapper #content-wrapper {
  overflow-x: hidden;
  width: 100%;
  padding-top: 1rem;
  padding-bottom: 80px;
}

.sidebar {
  width: 90px !important;
  background-color: #fcfcfc;
  min-height: calc(100vh - 80px);
}

.sidebar .nav-item{
    height: 50px;
}

.sidebar .nav-item .nav-link {
  text-align: center;
  padding: 0.75rem 1rem;
  width: 90px;
  color:#343a40;
  border:none !important;
}

.sidebar .nav-item .nav-link span {
  font-size: 0.65rem;
  display: block;
}

.sidebar .nav-item .nav-link {
  color: grey;
}

.sidebar .nav-item .nav-link:active,
.sidebar .nav-item .nav-link:focus,
.sidebar .nav-item .nav-link:hover {
  background-color: #ffd0a0;
  border:none !important;
  color:#343a40 !important;
}

.sidebar .nav-item .nav-link.active{
    background-color: #ffb970;
    color:black;
}

@media (min-width: 768px) {

.container{
    padding-top: 5%;
    padding-left: 8%;
}
  .sidebar {
    width: 200px !important;
  }
  .sidebar .nav-item .nav-link {
    display: block;
    width: 100%;
    text-align: left;
    padding: 0.5rem 1rem;
    width: 200px;
  }
  .sidebar .nav-item .nav-link span {
    font-size: 1rem;
    display: inline;
  }
}

.card-body-icon {
  position: absolute;
  z-index: 0;
  top: -1.25rem;
  right: 0.5rem;
  opacity: 0.4;
  font-size: 5rem;
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
}

</style>
<body id="page-top">
    @include('layouts.partials.nav')
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav navbar-light bg-white" style="border-right: 1px solid rgb(222,226,230);">
        <li style="border-bottom: 1px solid rgb(222,226,230);">
            <img class="rounded-circle my-2" id="profilepic" src="./css/images/profileimg.png" width="50px" height="50px">

        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.show', Auth::user()->id) }}">
            <span><img src="./css/icons/table.png" width="24px"></span>
            <span>My Profile</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="{{ route('faq') }}">
            <span><img src="./css/icons/bookings.png" width="24px"></span>
            <span>Booking History</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('messages') }}">
            <span><img src="./css/icons/users.png" width="24px"></span>
            <span>Message Box</span></a>
        </li>
      </ul>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h2>My Booking History</h2>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2> Active Booking </h2>
                                <h4 class="panel-title">
                                @foreach($activeBooking as $activeBooking)
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">{{$activeBooking->id}}</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in">
                                <div class="panel-body">
                        <p><strong>car</strong><br>type:<br>pick up:<br>return: Not returned yet<br>Payment:</p>

                    </div>
                    @endforeach

            <h2> Booking History </h2>

            @foreach($pastBooking as $pastBookings)
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">{{$pastBookings->id}}</a>
                        </h4>
                    </div>
            @endforeach
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p><strong>car</strong><br>type:{{$pastBookings->start_date}}<br>pick up:<br>return:{{$pastBookings->end_date}}<br>Payment:</p>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">06/07/2018 booking id:aksjdhiy12</a>
                    </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p><strong>car</strong><br>type:<br>pick up:<br>return: <br>Payment:</p>
            </div>

        </main>

    </div>
    <!-- /#wrapper -->

</body>

</html>

