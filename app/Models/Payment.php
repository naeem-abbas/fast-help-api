<?php

// app/Models/Payment.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'payment_method',
        'amount',
        'currency',
        'payment_status',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
