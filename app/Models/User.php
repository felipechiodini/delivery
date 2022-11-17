<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_id',
        'name',
        'cellphone'
    ];

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
