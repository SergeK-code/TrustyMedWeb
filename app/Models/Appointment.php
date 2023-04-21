<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'attend',
        'cancel',
        'cost',
        'user_id',
        'doctor_id',
        'payment_id',
    ];

    public function payment_type(){
        return $this->hasOne(PaymentType::class);
    }

    public function prescriptions(){
        return $this->hasMany(Prescription::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function medical_files(){
        return $this->hasMany(MedicalFile::class);
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
