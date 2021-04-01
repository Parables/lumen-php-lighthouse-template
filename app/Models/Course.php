<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Traits\GenerateCUID;

class Course extends Model
{
    use SoftDeletes, GenerateCUID;

    protected $fillable = [
        'title',
        'courseCode',
        'creditHours',
    ];

    protected $attributes = [
        'creditHours' => 3,
    ];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
