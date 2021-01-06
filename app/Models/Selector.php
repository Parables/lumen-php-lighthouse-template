<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Selector extends Model
{
    // public $attributes=['options'=>[]];
    public $fillable=['for', 'options'];

    public function options():HasMany
    {
      return $this->hasMany(SelectOption::class);
    }
}
