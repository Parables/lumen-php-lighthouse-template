<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Programme extends Model
{
    protected $fillable = [
        'title',
        'programmeCode',
        'startLevel',
        'endLevel',
    ];

    protected $attribute = [
        'programmeCode' => "",
        'startLevel' => 100,
    ];



    public function fees(): BelongsToMany
    {
        return $this->belongsToMany(Fee::class);
    }

    public function programmeOutline(): HasMany
    {
        return $this->hasMany(ProgrammeOutline::class);
    }
}
