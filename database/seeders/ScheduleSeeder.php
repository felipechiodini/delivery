<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create(['store_id' => 1,'day' => 'Dom','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
        Schedule::create(['store_id' => 1,'day' => 'Seg','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
        Schedule::create(['store_id' => 1,'day' => 'Ter','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
        Schedule::create(['store_id' => 1,'day' => 'Qua','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
        Schedule::create(['store_id' => 1,'day' => 'Qui','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
        Schedule::create(['store_id' => 1,'day' => 'Sex','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
        Schedule::create(['store_id' => 1,'day' => 'Sab','start' => now()->endOfDay()->subHours(5),'end' => now()->endOfDay()->toTimeString()]);
    }
}
