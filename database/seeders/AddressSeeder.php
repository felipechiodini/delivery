<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'cep' => '89253390',
            'state' => 'Santa Catarina',
            'city' => 'Jaraguá do Sul',
            'street' => 'Clécio Stringari',
            'number' => '45',
            'complement' => 'Casa'
        ]);
    }
}
