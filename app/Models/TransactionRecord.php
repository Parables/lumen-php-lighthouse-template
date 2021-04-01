<?php

namespace App\Models;

use App\Traits\GenerateCUID;
use Database\Seeders\SelectOptionsSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionRecord extends Model
{

    use SoftDeletes,GenerateCUID;

    protected $fillable = [
        'receiptImageUrl',
        'transactionDate',
        'transactionType',
        'amountPaid',
        'description',
    ];

    protected $attributes = [];

    public function paymentMethod(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'paymentMethod');
    }


    public function paidBy(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'paidBy');
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'tag');
    }
}
