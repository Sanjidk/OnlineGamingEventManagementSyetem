<?php

namespace Database\Seeders;

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
            'type'  => 'admin',
            'name'  =>  'Sanjid',
            'address'  =>  'Dhaka',
            'email'  =>  'admin@gmail.com',
            'password'  =>  bcrypt('123456'),
            'birthDate'  =>  '02/08/2021',
            'phone'  =>  '01843066666',

        ]);
    }
}
