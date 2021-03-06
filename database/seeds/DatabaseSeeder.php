<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
        $this->call(ReferralTableSeeder::class);
    }
}
