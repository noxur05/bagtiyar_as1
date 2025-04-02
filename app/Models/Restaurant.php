<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function restaurantProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'restaurant_product');
    }
    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
