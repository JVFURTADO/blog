<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Culinaria',
           
        ]);
    

    
        DB::table('categorias')->insert([
            'nome' => 'Política',
           
        ]);
    
    
        DB::table('categorias')->insert([
            'nome' => 'Bem estar',
           
        ]);
    }
}
