<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\GenerateCUID;

class Lecturer extends Model
{
    use SoftDeletes, GenerateCUID;
    //
}
