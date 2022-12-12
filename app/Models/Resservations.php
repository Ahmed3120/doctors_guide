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
        'reservation_time'
        
    ];

    protected $hidden = [
        'pivot'
    ];

    protected $cast = [
        
    ];

    public function doctors(){
        return $this->belongsToMany(
            Doctor::class,
            'doctors_resservations',
            'doctor_id',
            'resservation_id',
            'id',
            'id'
        );
    }
}
