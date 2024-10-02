<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Product::where('name', 'sabão em pó')->first()) {
            Product::create([
                'name' => 'sabão em pó',
            ]);
        }
        
        if (!Product::where('name', 'esponja')->first()) {
            Product::create([
                'name' => 'esponja',
            ]);
        }
        
        if (!Product::where('name', 'amaciante')->first()) {
            Product::create([
                'name' => 'amaciante',
            ]);
        }
        
        if (!Product::where('name', 'alvejante')->first()) {
            Product::create([
                'name' => 'alvejante',
            ]);
        }
        
    }
}
