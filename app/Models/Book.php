<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Traits\GenerateCUID;

class Book extends Model
{
    use SoftDeletes,GenerateCUID;

    protected $fillable = [
        'cover',
        'title',
        'bookCode',
        'author',
        'inStock',
    ];

    protected $attributes = [
        'inStock' => 0,
    ];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }

}
