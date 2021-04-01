<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\GenerateCUID;

class Contact extends Model
{
    use GenerateCUID;

    protected $fillable = [
        'contact_type',
        'contact_value',
    ];

    protected $attributes = [];
    protected $hidden = [];

    public function person(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }
}
