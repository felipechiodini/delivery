<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'schedule_id',
        'name',
        'phone',
        'cellphone',
        'image',
        'cnpj'
    ];

    protected $appends = [
        'open'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function payments()
    {
        return $this->belongsToMany(Payment::class, StorePayment::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function getOpenAttribute(): Bool
    {
        $weekMap = [
            0 => 'Dom',
            1 => 'Seg',
            2 => 'Ter',
            3 => 'Qua',
            4 => 'Qui',
            5 => 'Sex',
            6 => 'Sab'
        ];

        $weekday = $weekMap[Carbon::now()->dayOfWeek];
        $todaySchedule = $this->schedules->where('day', $weekday)->first();
        return now()->between($todaySchedule->start, $todaySchedule->end) === true;
    }
}
