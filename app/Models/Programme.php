<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        'endLevel' => 100,
    ];


    public function fees(): HasMany
    {
        return $this->hasMany(Fee::class);
    }

    public function programmeOutlines(): HasMany
    {
        return $this->hasMany(ProgrammeOutline::class);
    }
}
