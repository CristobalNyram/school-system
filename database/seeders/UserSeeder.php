<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Cristobal",
            'first_surname' => "Marin",
            'second_surname' => "Santos",
            'gender' => "M",
            'type_user'=>'1',
            'estatus'=>'2',
            'user' => "cris",
            'email' => "marrinmarrin@gmail.com",
            'password' => bcrypt('123456')
        ]);
       
    }
}
