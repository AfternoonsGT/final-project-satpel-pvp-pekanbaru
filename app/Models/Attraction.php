<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = [
        'name',
        'description',
        'zone_id',
        'price_range',
        'image',
    ];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }
    public function reviews()
{
    return $this->morphMany(Review::class, 'reviewable');
}
}
