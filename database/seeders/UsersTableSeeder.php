<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new User;
        $a->username = "ryanmorgans";
        $a->name = "Ryan Morgans";
        $a->email = "ryan.morgans.2001@gmail.com";
        $a->password = "newpassword";
        $a->role = "Admin";
        $a->save();

        $a = new User;
        $a->username = "abbyt1099";
        $a->name = "Abby Thomas";
        $a->email = "a.thomas@gmail.com";
        $a->password = "newpassword";
        $a->role = "User";
        $a->save();

        $a = new User;
        $a->username = "bread_smith";
        $a->name = "Bradley Smith";
        $a->email = "bradsmith.new@aol.com";
        $a->password = "newpassword";
        $a->role = "User";
        $a->save();

        $users = User::factory()->count(10)->create();
    }
}