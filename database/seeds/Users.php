<?php

use Illuminate\Database\Seeder;
use App\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'name' => 'Nicolas',
                'email' => 'nico@gmail.com',
                'password' => bcrypt('1234')
            ]
            );
    }
}
