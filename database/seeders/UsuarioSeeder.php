<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i = 1; $i <=400; $i++) {

            Usuario::create([
                'nome' => 'A' . $i,
                'email' => 'Aa@gmail.com' . $i,
                'celular' => '12345678',
                'estado_civil' => 'aaaa',
                'data_nascimento' => rand(1990, 2005) . '-' . rand(1,12) . '-' . rand(1, 28),
                'cidade' => 'Aaaaaa' . $i,
                'estado' => 'aa' . $i,
                'endereco' => 'aaaaaaa',
                'cep' => '123456789',
                'password' => '12345678'
            ]);
        }
    }
}
