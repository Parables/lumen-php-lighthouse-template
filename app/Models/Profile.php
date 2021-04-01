<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Profile extends Model
{
    use SoftDeletes, GenerateCUID;

    protected $fillable = [
        'picture',
        'title',
        'fullName',
        'lastName',
        'firstName',
        'middleName',
        'maidenName',
        'otherNames',
        'nickname',
        'prefix',
        'suffix',
        'dob',
        'gender',
        'maritalStatus'
    ];
    protected $attributes = [];
    protected $hidden = [];


    public function type(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'type');
    }

    public function maritalStatus(): BelongsTo
    {
        return $this->belongsTo(SelectOption::class, 'maritalStatus');
    }

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function contactInfo():Collection
    {
        // TODO: Implement this
        $contacts = $this->contacts()->get();
        $collection = collect($contacts);
        $contactInfo = $collection->groupBy('contactType')->all();
        return json_decode(json_encode($contactInfo));

    }
}
