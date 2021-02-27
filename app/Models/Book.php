<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Book extends Model
{
    use GenerateCUID;

    protected $fillable = [
        'cover',
        'title',
        'bookCode',
        'author',
        'inStock',
    ];

    protected $attributes = [
        'cover' => '',
        'bookCode' => '',
        'author' => '',
        'inStock' => 0,
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }


    public function bookRecords(): HasMany
    {
        return $this->hasMany(BookRecord::class);
    }
}
