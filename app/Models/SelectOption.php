<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SelectOption extends Model
{
   public function selector(): BelongsTo
   {
       return $this->belongsTo(Selector::class);
   }
}
