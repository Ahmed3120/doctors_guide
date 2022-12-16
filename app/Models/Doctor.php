<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
        'updated_at',
        'user_id'

    ];

    protected $hidden = [
        'created_at',
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

    public function user(){
        return $this->belongsTo(
            'App\Models\User',
            'id'
        );
    }
}
