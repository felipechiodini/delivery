<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create(['name' => 'Cartão Crédito']);
        Payment::create(['name' => 'Cartão Dédito']);
        Payment::create(['name' => 'Dinheiro']);
        Payment::create(['name' => 'Pix']);
    }
}
