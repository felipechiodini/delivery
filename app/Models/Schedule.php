<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'day',
        'start',
        'end'
    ];

    protected $dates = [
        'start',
        'end'
    ];

}
