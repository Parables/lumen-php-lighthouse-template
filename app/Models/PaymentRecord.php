<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\GenerateCUID;

class PaymentRecord extends Model
{
    use SoftDeletes, GenerateCUID;

   public function bank(): BelongsTo
   {
       return  $this->belongsTo(SelectOption::class, 'bank');
   }

   public function paidBy(): BelongsTo
   {
       return $this->belongsTo(Student::class, 'paidBy');
   }

    public function semesterType(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'semesterType');
    }
}
