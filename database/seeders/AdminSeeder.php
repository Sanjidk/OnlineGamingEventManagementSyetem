<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'type'  => 'admin',
            'name'  =>  'admin',
            'address'  =>  'Dhaka',
            'email'  =>  'admin@gmail.com',
            'password'  =>  bcrypt('123456'),
            'birthDate'  =>  '02/08/2021',
            'phone'  =>  '01843066666',


        ]);
    }
}
