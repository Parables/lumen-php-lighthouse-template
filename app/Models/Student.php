<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function paymentRecords(): HasMany
    {
        return $this->hasMany(PaymentRecord::class);
    }

    public function booksRecords(): HasMany
    {
        return $this->hasMany(BookRecord::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
