<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [

        'doctor_name',
        'doctor_address1',
        'doctor_address2',
        'specialize',
        'doctor_phone_number',
        'note',
        'updated_at'

    ];

    protected $hidden = [
        'created_at',
        'pivot'
    ];

    public function resservations(){
        return $this->belongsToMany(
            'App\Models\Resservations',
            'doctors_resservations',
            'resservation_id',
            'doctor_id',
            'id',
            'id'

        );
    }
}
