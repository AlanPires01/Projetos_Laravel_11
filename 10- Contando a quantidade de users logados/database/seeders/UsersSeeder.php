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
        
        // Verifica se o usuário já existe antes de criar
        if (!User::where('email', 'alanpires@alu.ufc.br')->first()) {
            User::create([
                'name' => 'Alan Pires',
                'email' => 'alanpires@alu.ufc.br',
                'password' => Hash::make('123456', ['rounds' => 12]),
            ]);
        }

        if (!User::where('email', 'mariasilva@example.com')->first()) {
            User::create([
                'name' => 'Maria Silva',
                'email' => 'mariasilva@example.com',
                'password' => Hash::make('senha123', ['rounds' => 12]),
            ]);
        }

        if (!User::where('email', 'joaosouza@example.com')->first()) {
            User::create([
                'name' => 'João Souza',
                'email' => 'joaosouza@example.com',
                'password' => Hash::make('senha123', ['rounds' => 12]),
            ]);
        }

        if (!User::where('email', 'anacarvalho@example.com')->first()) {
            User::create([
                'name' => 'Ana Carvalho',
                'email' => 'anacarvalho@example.com',
                'password' => Hash::make('senha123', ['rounds' => 12]),
            ]);
        }

        if (!User::where('email', 'pedroramos@example.com')->first()) {
            User::create([
                'name' => 'Pedro Ramos',
                'email' => 'pedroramos@example.com',
                'password' => Hash::make('senha123', ['rounds' => 12]),
            ]);
        }

        if (!User::where('email', 'claudiasantos@example.com')->first()) {
            User::create([
                'name' => 'Claudia Santos',
                'email' => 'claudiasantos@example.com',
                'password' => Hash::make('senha123', ['rounds' => 12]),
            ]);
        }
    
    }
}
