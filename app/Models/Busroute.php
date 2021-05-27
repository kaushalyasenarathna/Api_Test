<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busroute extends Model
{
    use HasFactory;
    protected $table = 'bus_routes';
    protected $fillable = [
        'bus_id',
        'route_id',
        'status',
    ];

    public function route()
    {
        return $this->hasMany(Route::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function busshedule()
    {
        return $this->hasMany(bus_schedules::class);
    }
}
