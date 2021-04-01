<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\GenerateCUID;

class Profile extends Model
{
    use GenerateCUID;

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

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

}
