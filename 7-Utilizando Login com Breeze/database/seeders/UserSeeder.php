<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where("email",'alan@alu.ufc.br')->first()){
            $superAdmin =User::create([
                'name'=>'Alan',
                'email'=> 'alan@alu.ufc.br',
                'password'=>Hash::make('123456a',['rounds'=>12]),
            ]);
        }

                // Seeder para Maria
                if(!User::where('email', 'maria@example.com')->first()) {
                    $superAdmin = User::create([
                        'name' => 'Maria Silva',
                        'email' => 'maria@example.com',
                        'password' => Hash::make('password123', ['rounds' => 12]),
                    ]);
                }
        
                // Seeder para João
                if(!User::where('email', 'joao@example.com')->first()) {
                    $superAdmin = User::create([
                        'name' => 'João Souza',
                        'email' => 'joao@example.com',
                        'password' => Hash::make('password456', ['rounds' => 12]),
                    ]);
                }
        
                // Seeder para Pedro
                if(!User::where('email', 'pedro@example.com')->first()) {
                    $superAdmin = User::create([
                        'name' => 'Pedro Oliveira',
                        'email' => 'pedro@example.com',
                        'password' => Hash::make('password789', ['rounds' => 12]),
                    ]);
                }
        
                // Seeder para Ana
                if(!User::where('email', 'ana@example.com')->first()) {
                    $superAdmin = User::create([
                        'name' => 'Ana Costa',
                        'email' => 'ana@example.com',
                        'password' => Hash::make('senha123', ['rounds' => 12]),
                    ]);
                }
        
                // Seeder para Bruno
                if(!User::where('email', 'bruno@example.com')->first()) {
                    $superAdmin = User::create([
                        'name' => 'Bruno Lima',
                        'email' => 'bruno@example.com',
                        'password' => Hash::make('senha456', ['rounds' => 12]),
                    ]);
                }
        
    }
}
