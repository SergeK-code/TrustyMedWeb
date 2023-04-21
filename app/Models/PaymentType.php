<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model{
    use HasFactory;

    protected $fillable = [
        'payment_method',
    ];

    public function appointment(){
        return $this->belongsTo(Appointment::class);
    }
}
