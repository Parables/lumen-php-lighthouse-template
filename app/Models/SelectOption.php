<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\GenerateCUID;

class SelectOption extends Model
{
    use SoftDeletes, GenerateCUID;
    public $fillable = [
        'fieldName',
        'parentID',
        'name',
        'label',
        'value'
    ];

    protected $attributes = [];
}
