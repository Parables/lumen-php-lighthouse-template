<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\GenerateCUID;

class Contact extends Model
{
    use SoftDeletes, GenerateCUID;

    protected $fillable = [
        'contactType',
        'contactValue',
    ];

    protected $attributes = [];
    protected $hidden = [];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function contactType(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'contactType');
    }
}
