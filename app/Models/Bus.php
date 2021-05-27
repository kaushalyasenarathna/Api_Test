<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'bus';
    protected $fillable = [
        'name',
        'type',
        'vehicle_number',
    ];

    public function Busroute()
    {
        return $this->hasMany(Busroute::class);
    }

    public function busseat()
    {
        return $this->hasMany(Bus_seats::class);
    }
}
