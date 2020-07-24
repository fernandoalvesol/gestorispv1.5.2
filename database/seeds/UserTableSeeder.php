<?php

use Illuminate\Database\Seeder;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        	'name' 		=> 'Fernando Alves',
        	'email' 	=> 'fernando@gmail.com',
                'role'		=> 'comum',
                'filial'        => 'recife',
        	'password' 	=> bcrypt('123456'),

        ]);
    }
}
