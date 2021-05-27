<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus_schedule_booking extends Model
{
    use HasFactory;
    protected $table = 'bus_schedule_bookings';
    protected $fillable = [
        'bus_seat_id',
        'user_id',
        'bus_schedule_id',
        'seat_number',

        'price',
        'status',
    ];

    public function phone()
    {
        return $this->hasOne('App\Phone');
    }

    public function bus_seat()
    {
        return $this->belongsTo(Bus_seats::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
