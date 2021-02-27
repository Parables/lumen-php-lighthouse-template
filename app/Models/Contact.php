<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\GenerateCUID;

class Contact extends Model
{
    use GenerateCUID;
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
