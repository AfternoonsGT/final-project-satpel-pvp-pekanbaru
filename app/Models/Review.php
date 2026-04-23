<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'reviewable_id',
        'reviewable_type',
        'reviewer_name',
        'description',
        'rating',
        'comment',
        'is_approved',
    ];

    public function reviewable()
    {
        return $this->morphTo();
    }
}
