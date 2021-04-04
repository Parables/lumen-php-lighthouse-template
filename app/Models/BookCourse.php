<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\GenerateCUID;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use EndyJasmi\Cuid;

class BookCourse extends Model
{
    //
    use SoftDeletes,GenerateCUID;

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

}
