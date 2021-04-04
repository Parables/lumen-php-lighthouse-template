<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\GenerateCUID;

class ProgrammeOutline extends Model
{
    use GenerateCUID;
    protected $fillable = [
        'level',
        'elective',
    ];

    protected $attributes = [
        'elective' => false
    ];

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function programme():BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function semester():BelongsTo
{
    return $this->belongsTo(SelectOption::class, 'semester');
}
}
