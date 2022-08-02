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
            'name' => "Miguel Angel Vera Ramos",
            'user' => "miguelangel",
            'email' => "miguelavramos21@gmail.com",
            'password' => bcrypt('ti.vera.ramos')
        ]);
        DB::table('users')->insert([
            'name' => "Victor Manuel",
            'user' => "victor",
            'email' => "victor@uttecam.edu.mx",
            'password' => bcrypt('ti.12345')
        ]);
    }
}
