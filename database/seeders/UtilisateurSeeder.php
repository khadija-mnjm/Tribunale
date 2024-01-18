<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('utilisateurs')->insert([
            'login' => 'admin',
            'password' => Hash::make('admin'),
            'typeU' => 'admin',
        ]);

        DB::table('utilisateurs')->insert([
            'login' => 'user',
            'password' => Hash::make('user'),
            'typeU' => 'utilisateur',
        ]);
    }
}
