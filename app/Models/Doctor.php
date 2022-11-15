<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [

        'doctor_name',
        'doctor_addresss1',
        'doctor_addresss2',
        'specialize',
        'doctor_phone_number',
        'note',

    ];

    protected $hidden = [
        'timestamps'
    ];
}
