<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pationt_name',
        'p_number',
        'p_email',
        'p_case',
        'request_case',
        
    ];

    protected $hidden = [

    ];

    protected $cast = [
        
    ];
}
