<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Store::create([
            'address_id' => 1,
            'name' => 'Bro Burguer',
            'cellphone' => '47999097073',
            'image' => 'https://viagemegastronomia.cnnbrasil.com.br/wp-content/uploads/sites/5/2017/02/Geral-Bro-Burguer-Cre%CC%81dito-Mario-Rodrigues-Jr.-7.jpg',
            'cnpj' => '11048424910256'
        ]);

        Store::first()->payments()->attach(1);
        Store::first()->payments()->attach(2);
        Store::first()->payments()->attach(3);
        Store::first()->payments()->attach(4);
    }
}
