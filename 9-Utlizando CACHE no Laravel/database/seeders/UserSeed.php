<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        // Verifica se o usuário com esse e-mail já existe, se não, cria um novo
        if (!User::where("email", "alanpires@alu.ufc.br")->first()) {
            User::create([
                "name" => "Alan Pires",
                "email" => "alanpires@alu.ufc.br",
                "password" => Hash::make("123456", ["rounds" => "12"]),
            ]);
        }

        if (!User::where("email", "joaosilva@alu.ufc.br")->first()) {
            User::create([
                "name" => "João Silva",
                "email" => "joaosilva@alu.ufc.br",
                "password" => Hash::make("abcdef", ["rounds" => "12"]),
            ]);
        }

        if (!User::where("email", "mariaribeiro@alu.ufc.br")->first()) {
            User::create([
                "name" => "Maria Ribeiro",
                "email" => "mariaribeiro@alu.ufc.br",
                "password" => Hash::make("senha123", ["rounds" => "12"]),
            ]);
        }

        if (!User::where("email", "pedrocosta@alu.ufc.br")->first()) {
            User::create([
                "name" => "Pedro Costa",
                "email" => "pedrocosta@alu.ufc.br",
                "password" => Hash::make("pass123", ["rounds" => "12"]),
            ]);
        }
        if (!User::where("email", "lucasfernandes@alu.ufc.br")->first()) {
            User::create([
                "name" => "Lucas Fernandes",
                "email" => "lucasfernandes@alu.ufc.br",
                "password" => Hash::make("senha321", ["rounds" => "12"]),
            ]);
        }
        
        if (!User::where("email", "sofiacruz@alu.ufc.br")->first()) {
            User::create([
                "name" => "Sofia Cruz",
                "email" => "sofiacruz@alu.ufc.br",
                "password" => Hash::make("pass789", ["rounds" => "12"]),
            ]);
        }
        
        if (!User::where("email", "carlosalmeida@alu.ufc.br")->first()) {
            User::create([
                "name" => "Carlos Almeida",
                "email" => "carlosalmeida@alu.ufc.br",
                "password" => Hash::make("senha987", ["rounds" => "12"]),
            ]);
        }
        
        if (!User::where("email", "amandasilva@alu.ufc.br")->first()) {
            User::create([
                "name" => "Amanda Silva",
                "email" => "amandasilva@alu.ufc.br",
                "password" => Hash::make("senha654", ["rounds" => "12"]),
            ]);
        }
        
        if (!User::where("email", "marcelovieira@alu.ufc.br")->first()) {
            User::create([
                "name" => "Marcelo Vieira",
                "email" => "marcelovieira@alu.ufc.br",
                "password" => Hash::make("senha321", ["rounds" => "12"]),
            ]);
        }
        


    }
}
