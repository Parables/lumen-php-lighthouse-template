<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enrollment extends Model
{
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function semester(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'semester');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'semester');
    }

    public function enrollmentStatus(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'enrollmentStatus');
    }

    public function booksGiven(): HasMany
    {
        return $this->hasMany(Book::class, 'booksGiven');
    }

}
