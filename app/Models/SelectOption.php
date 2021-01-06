<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SelectOption extends Model
{
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
