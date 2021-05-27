<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_seats extends Model
{
    use HasFactory;
    protected $table = 'bus_seates';
    protected $fillable = [
        'bus_id',
        'seat_number',
        'price',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function bus_shedule_booking()
    {
        return $this->hasMany(bus_schedule_booking::class);
    }
}
