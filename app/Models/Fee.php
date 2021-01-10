<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fee extends Model
{
    //
    protected $fillable = [
        'level',
        'amountPayable',
    ];

    protected $attributes = ['description' => ""];

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }
}
