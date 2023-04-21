<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model{
    use HasFactory;

    protected $fillable = [
        'day',
        'start_hour',
        'end_hour',
        'doctor_id',
    ];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
}
