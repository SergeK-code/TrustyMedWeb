<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalFile extends Model{
    use HasFactory;

    protected $fillable = [
        'medical_history',
        'height',
        'weight',
        'user_id',
        'appointment_id',
    
    ];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }

    public function deseases(){
        return $this->hasMany(Desease::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
