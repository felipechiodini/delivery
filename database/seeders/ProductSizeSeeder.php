<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductSize::create([
            'product_id' => 1,
            'quantity' => 1,
            'type' => 'unit',
            'value' => 30
        ]);
    }
}
