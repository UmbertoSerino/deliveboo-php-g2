<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password456'),
            ],
            [
                'name' => 'Michael',
                'last_name' => 'Johnson',
                'email' => 'michael@example.com',
                'password' => bcrypt('password789'),
            ],
            [
                'name' => 'Emily',
                'last_name' => 'Brown',
                'email' => 'emily@example.com',
                'password' => bcrypt('passwordABC'),
            ],
            [
                'name' => 'David',
                'last_name' => 'Williams',
                'email' => 'david@example.com',
                'password' => bcrypt('passwordDEF'),
            ],
            [
                'name' => 'Sandrina',
                'last_name' => 'Montenini',
                'email' => 'alfa@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Carla',
                'last_name' => 'Cracci',
                'email' => 'sibemolle@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Andrea',
                'last_name' => 'Rossi',
                'email' => 'andrea.rossi@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Martina',
                'last_name' => 'Bianchi',
                'email' => 'martina.bianchi@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Marco',
                'last_name' => 'Esposito',
                'email' => 'marco.esposito@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Sara',
                'last_name' => 'Russo',
                'email' => 'sara.russo@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Luca',
                'last_name' => 'Colombo',
                'email' => 'luca.colombo@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Valentina',
                'last_name' => 'Conti',
                'email' => 'valentina.conti@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Alessio',
                'last_name' => 'Ferri',
                'email' => 'alessio.ferri@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Francesca',
                'last_name' => 'Marini',
                'email' => 'francesca.marini@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Mattia',
                'last_name' => 'Galli',
                'email' => 'mattia.galli@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Giorgia',
                'last_name' => 'Moretti',
                'email' => 'giorgia.moretti@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Simone',
                'last_name' => 'Leone',
                'email' => 'simone.leone@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Chiara',
                'last_name' => 'Fiore',
                'email' => 'chiara.fiore@example.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Fabio',
                'last_name' => 'Rizzo',
                'email' => 'fabio.rizzo@example.com',
                'password' => bcrypt('123456'),
            ],

        ];


        // Inserisci i dati nel database
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
