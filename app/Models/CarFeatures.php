<?php

namespace App\Models;

use Database\Factories\CarFeaturesFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeatures extends Model
{
    /** @use HasFactory<CarFeaturesFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'car_id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'abs',
        'air_conditioning',
        'power_windows',
        'power_door_locks',
        'cruise_control',
        'bluetooth_connectivity',
        'remote_start',
        'gps_navigation',
        'heated_seats',
        'climate_control',
        'rear_parking_sensors',
        'leather_seats',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
