<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    protected $fillable = [
        'phone',
        'email',
        'location',
        'digitalAddress',
        'postalAddress',
    ];

    protected $attributes = [
        'location' => '',
        'digitalAddress' => '',
        'postalAddress' => '',
    ];

}
