<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'type'  =>  'admin',
            'name'  =>  'admin',
            'address'  =>  'Dhaka',
            'email'  =>  'admin@gmail.com',
            'password'  =>  bcrypt('123456'),
            'birthDate'  =>  '1997-02-08',
            'phone'  =>  '01843066666',

        ]);
    }
}
