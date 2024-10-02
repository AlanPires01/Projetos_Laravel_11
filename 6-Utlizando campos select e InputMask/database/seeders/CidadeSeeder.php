<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cidades = [
            ['nome_cidade' => 'Rio Branco', 'estado_id' => 1],
            ['nome_cidade' => 'Cruzeiro do Sul', 'estado_id' => 1],
            ['nome_cidade' => 'Sena Madureira', 'estado_id' => 1],
        
            ['nome_cidade' => 'Maceió', 'estado_id' => 2],
            ['nome_cidade' => 'Arapiraca', 'estado_id' => 2],
            ['nome_cidade' => 'Palmeira dos Índios', 'estado_id' => 2],
        
            ['nome_cidade' => 'Manaus', 'estado_id' => 3],
            ['nome_cidade' => 'Parintins', 'estado_id' => 3],
            ['nome_cidade' => 'Itacoatiara', 'estado_id' => 3],
        
            ['nome_cidade' => 'Macapá', 'estado_id' => 4],
            ['nome_cidade' => 'Santana', 'estado_id' => 4],
            ['nome_cidade' => 'Oiapoque', 'estado_id' => 4],
        
            ['nome_cidade' => 'Salvador', 'estado_id' => 5],
            ['nome_cidade' => 'Feira de Santana', 'estado_id' => 5],
            ['nome_cidade' => 'Vitória da Conquista', 'estado_id' => 5],
        
            ['nome_cidade' => 'Fortaleza', 'estado_id' => 6],
            ['nome_cidade' => 'Juazeiro do Norte', 'estado_id' => 6],
            ['nome_cidade' => 'Sobral', 'estado_id' => 6],
        
            ['nome_cidade' => 'Brasília', 'estado_id' => 7],
            ['nome_cidade' => 'Gama', 'estado_id' => 7],
            ['nome_cidade' => 'Ceilândia', 'estado_id' => 7],
        
            ['nome_cidade' => 'Vitória', 'estado_id' => 8],
            ['nome_cidade' => 'Vila Velha', 'estado_id' => 8],
            ['nome_cidade' => 'Serra', 'estado_id' => 8],
        
            ['nome_cidade' => 'Goiânia', 'estado_id' => 9],
            ['nome_cidade' => 'Anápolis', 'estado_id' => 9],
            ['nome_cidade' => 'Aparecida de Goiânia', 'estado_id' => 9],
        
            ['nome_cidade' => 'São Luís', 'estado_id' => 10],
            ['nome_cidade' => 'Imperatriz', 'estado_id' => 10],
            ['nome_cidade' => 'Caxias', 'estado_id' => 10],
        
            ['nome_cidade' => 'Belo Horizonte', 'estado_id' => 11],
            ['nome_cidade' => 'Uberlândia', 'estado_id' => 11],
            ['nome_cidade' => 'Contagem', 'estado_id' => 11],
        
            ['nome_cidade' => 'Campo Grande', 'estado_id' => 12],
            ['nome_cidade' => 'Dourados', 'estado_id' => 12],
            ['nome_cidade' => 'Três Lagoas', 'estado_id' => 12],
        
            ['nome_cidade' => 'Cuiabá', 'estado_id' => 13],
            ['nome_cidade' => 'Várzea Grande', 'estado_id' => 13],
            ['nome_cidade' => 'Rondonópolis', 'estado_id' => 13],
        
            ['nome_cidade' => 'Belém', 'estado_id' => 14],
            ['nome_cidade' => 'Ananindeua', 'estado_id' => 14],
            ['nome_cidade' => 'Santarém', 'estado_id' => 14],
        
            ['nome_cidade' => 'João Pessoa', 'estado_id' => 15],
            ['nome_cidade' => 'Campina Grande', 'estado_id' => 15],
            ['nome_cidade' => 'Santa Rita', 'estado_id' => 15],
        
            ['nome_cidade' => 'Recife', 'estado_id' => 16],
            ['nome_cidade' => 'Olinda', 'estado_id' => 16],
            ['nome_cidade' => 'Caruaru', 'estado_id' => 16],
        
            ['nome_cidade' => 'Teresina', 'estado_id' => 17],
            ['nome_cidade' => 'Parnaíba', 'estado_id' => 17],
            ['nome_cidade' => 'Picos', 'estado_id' => 17],
        
            ['nome_cidade' => 'Curitiba', 'estado_id' => 18],
            ['nome_cidade' => 'Londrina', 'estado_id' => 18],
            ['nome_cidade' => 'Maringá', 'estado_id' => 18],
        
            ['nome_cidade' => 'Rio de Janeiro', 'estado_id' => 19],
            ['nome_cidade' => 'Niterói', 'estado_id' => 19],
            ['nome_cidade' => 'Petrópolis', 'estado_id' => 19],
        
            ['nome_cidade' => 'Natal', 'estado_id' => 20],
            ['nome_cidade' => 'Mossoró', 'estado_id' => 20],
            ['nome_cidade' => 'Parnamirim', 'estado_id' => 20],
        
            ['nome_cidade' => 'Porto Velho', 'estado_id' => 21],
            ['nome_cidade' => 'Ji-Paraná', 'estado_id' => 21],
            ['nome_cidade' => 'Ariquemes', 'estado_id' => 21],
        
            ['nome_cidade' => 'Boa Vista', 'estado_id' => 22],
            ['nome_cidade' => 'Rorainópolis', 'estado_id' => 22],
            ['nome_cidade' => 'Caracaraí', 'estado_id' => 22],
        
            ['nome_cidade' => 'Porto Alegre', 'estado_id' => 23],
            ['nome_cidade' => 'Caxias do Sul', 'estado_id' => 23],
            ['nome_cidade' => 'Pelotas', 'estado_id' => 23],
        
            ['nome_cidade' => 'Florianópolis', 'estado_id' => 24],
            ['nome_cidade' => 'Joinville', 'estado_id' => 24],
            ['nome_cidade' => 'Blumenau', 'estado_id' => 24],
        
            ['nome_cidade' => 'Aracaju', 'estado_id' => 25],
            ['nome_cidade' => 'Nossa Senhora do Socorro', 'estado_id' => 25],
            ['nome_cidade' => 'Itabaiana', 'estado_id' => 25],
        
            ['nome_cidade' => 'São Paulo', 'estado_id' => 26],
            ['nome_cidade' => 'Campinas', 'estado_id' => 26],
            ['nome_cidade' => 'Santos', 'estado_id' => 26],
        
            ['nome_cidade' => 'Palmas', 'estado_id' => 27],
            ['nome_cidade' => 'Araguaína', 'estado_id' => 27],
            ['nome_cidade' => 'Gurupi', 'estado_id' => 27],
        ];

        foreach($cidades as $cidade){
            if(!Cidade::where('nome_cidade', $cidade['nome_cidade'])
            ->where('estado_id',$cidade['estado_id'])->exists()){
                Cidade::insert($cidade);
            }
        }
        
    }
}
