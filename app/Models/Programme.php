<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Programme extends Model
{
    use GenerateCUID;
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
