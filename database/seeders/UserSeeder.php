<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Se não encontrar o registro com o email  cadastra o registro no banco de dados
        User::firstOrCreate(
            ['email' => 'berg@gmail.com.br'],
            ['name' => 'Berg', 'email' => 'berg@gmail.com.br', 'password' => '1234A#']
        );

        User::firstOrCreate(
            ['email' => 'bibi@gmail.com.br'],
            ['name' => 'Bibi', 'email' => 'bibi@gmail.com.br', 'password' => '1234A#']
        );
    }
}
