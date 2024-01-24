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
            'login' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'typeUtilisateur' => 'admin',
            'image' => 'https://rc-pro-france.fr/wp-content/uploads/sites/2/2020/03/why-choose-us.png',
            'nom' => 'admin',
            'prenom' => 'ali',
        ]);

        DB::table('utilisateurs')->insert([
            'login' => 'user@gmail.com',
            'password' => Hash::make('user'),
            'typeUtilisateur' => 'utilisateur',
            'image' => 'user@gmail.com',
            'nom' => 'info',
            'prenom' => 'utilisateurs',
        ]);
        DB::table('utilisateurs')->insert([
            'login' => 'khadijamounajjim@gmail.com',
            'password' => Hash::make('khadija123'),
            'typeUtilisateur' => 'utilisateur',
            'image' => 'https://us.123rf.com/450wm/luzazure/luzazure2309/luzazure230910415/212602044-vue-lat%C3%A9rale-d-une-femme-d-affaires-s%C3%A9rieuse-travaillant-sur-un-ordinateur-sur-son-lieu-de-travail.jpg?ver=6',
            'nom' => 'khadija',
            'prenom' => 'Mounajjim',
        ]);
    }
}
