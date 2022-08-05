<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarDetail extends Model
{
    use HasFactory;

    protected $fillable = ['car_id', 'vehicle_type', 'color', 'price',];

    public function car() {
        return $this->belongsTo('App\Models\Car');
    }
}
