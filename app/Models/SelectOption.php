<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SelectOption extends Model
{
    public $fillable = ['selector_id', 'name', 'label', 'value'];

    public function for(): BelongsTo
    {
        return $this->belongsTo(Selector::class);
    }
}
