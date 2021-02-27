<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Traits\GenerateCUID;

class Course extends Model
{
    use GenerateCUID;
    protected $fillable = [
        'title',
        'courseCode',
        'creditHours',
    ];

    protected $attributes = [
        'courseCode' => "",
        'creditHours' => 3,
    ];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
