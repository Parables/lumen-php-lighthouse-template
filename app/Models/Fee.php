<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Traits\GenerateCUID;

class Fee extends Model
{
    use SoftDeletes, GenerateCUID;
    //
    protected $fillable = [
        'description',
        'amountPayable',
    ];

    protected $attributes = ['description' => ""];

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }
}
