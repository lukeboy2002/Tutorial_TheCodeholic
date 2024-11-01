<?php

namespace App\Models;

use Database\Factories\CarImageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarImage extends Model
{
    /** @use HasFactory<CarImageFactory> */
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'car_id',
        'image_path',
        'position',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
