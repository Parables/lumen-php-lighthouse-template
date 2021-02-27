<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\GenerateCUID;

class SelectOption extends Model
{
    use GenerateCUID;
    public $fillable = [
        'for',
        'name',
        'label',
        'value'
    ];


    protected $attributes = [
        'name' => '',
        'label' => '',
    ];
}
