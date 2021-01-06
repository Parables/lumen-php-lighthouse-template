<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Programme extends Model
{

    protected $attribute=[
        'startLevel'=>100,
        'programmeCode'=>"",
        'programmeOutline'=>[]
    ];

    protected $fillable = [
        'title',
        'programmeCode',
        'startLevel',
        'endLevel',
    ];

    public function programmeOutline(): HasMany
    {
        return $this->hasMany(ProgrammeOutline::class);
    }
}
