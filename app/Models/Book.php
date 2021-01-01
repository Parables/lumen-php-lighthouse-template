<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    protected $fillable = [
        'cover',
        'title',
        'bookCode',
        'author',
        'inStock',
        'courses'
    ];

    protected $attributes = [
        'cover' => '',
        'bookCode' => '',
        'author' => '',
        'inStock' => 0,
        'courses'=> []
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
