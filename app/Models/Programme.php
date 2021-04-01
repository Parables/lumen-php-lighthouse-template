<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Programme extends Model
{
    use SoftDeletes, GenerateCUID;
    protected $fillable = [
        'title',
        'programmeCode',
        'startLevel',
        'endLevel',
        'programmeOutline'
    ];

    protected $attribute = [
        'programmeCode' => "",
        'startLevel' => 100,
        'endLevel' => 100,
    ];

    public function fees(): HasMany
    {
        return $this->hasMany(Fee::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'type');
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course');
    }
}
