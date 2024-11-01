<?php

namespace App\Models;

use Database\Factories\MakerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maker extends Model
{
    /** @use HasFactory<MakerFactory> */
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function cars():HasMany
    {
        return $this->hasMany(Car::class);
    }

    public function models():HasMany
    {
        return $this->hasMany(\App\Models\Model::class);
    }
}
