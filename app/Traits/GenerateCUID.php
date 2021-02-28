<?php

namespace App\Traits;

// use Illuminate\Support\Str;

use EndyJasmi\Cuid;

trait GenerateCUID
{
    protected static function bootUsesUuid()
    {
        static::creating(function ($model) {
            if (!$model->getKey()) {
                $model->{$model->getKeyName()} = (string) Cuid::cuid();
            }
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
