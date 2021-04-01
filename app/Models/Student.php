<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Student extends Model
{
    use SoftDeletes, GenerateCUID;

    protected $fillable = [
        'applicationID',
        'examsNumber',
        'academicYear',
        'startLevel',
        'currentLevel',
        'endLevel',
        'remarks',
        'admitted_on',
        'completed_on'
    ];

    protected $attributes = [];

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function paymentRecords(): HasMany
    {
        return $this->hasMany(PaymentRecord::class);
    }

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }

    public function admissionStatus(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'admissionStatus');
    }
}
