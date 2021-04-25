<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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

            'name'  =>  'admin',
            'address'  =>  'Dhaka',
            'email'  =>  'admin@gmail.com',
            'password'  =>  bcrypt('1234567'),
            'birthDate'  =>  '02/08/2021',
            'phone'  =>  '01843066666',

        ]);
    }
}
