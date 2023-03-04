<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clientes::create([
            'nomeContato' => 'João Aguiar de souza',
            'cpfContato' => '798.123.548-55',
            'dataNascContato' => '1995-05-27',
            'sexoContato' => 'M',
            'enderecoContato' => 'Rua São Pedro',
            'estadoContato' => 'PE',
            'cidadeContato' => 'Recife'
        ]);
    }
}
