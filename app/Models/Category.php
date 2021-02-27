<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Category extends Model
{
    use GenerateCUID;

    // protected $attributes = [];

    protected $fillable = ['name', 'parent_id'];

    public function subCategories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
