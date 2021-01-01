<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    protected $fillable = [
        'title',
        'courseCode',
        'creditHours',
        'books',
        'lecturers'
    ];

    protected $attributes = [
        'creditHours' => 3,
        'books' => [],
        'lecturers' => []
    ];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
