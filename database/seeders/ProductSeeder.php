<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id' => 1,
            'active' => true,
            'name' => 'X-Bacon',
            'description' => 'Delicioso X-Bacon',
            'image' => 'https://vocegastro.com.br/app/uploads/2021/11/x-bacon.jpg'
        ]);
    }
}
