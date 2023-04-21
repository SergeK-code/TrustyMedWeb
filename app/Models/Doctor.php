<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'bio',
        'rating',
        'is_available',
        'consultation_cost',
        'image',
        'speciality_id',
    ];

    public function speciality(){
        return $this->belongsTo(Speciality::class);
    }

    public function schedules(){
        return $this->hasMany(Schedule::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

}
