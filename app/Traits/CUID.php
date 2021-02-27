<?php

namespace App\Traits;

// use Illuminate\Support\Str;

use EndyJasmi\Cuid;

trait GenerateCUID
{



    /**
     * Generate UUID v4 when creating model.
     */
    protected static function boot()
    {
        parent::boot();

        self::cuid();
    }

    /**
     * Defines the UUID field for the model.
     * @return string
     */
    protected static function uuidField()
    {
        return 'uuid';
    }

    /**
     * Use if boot() is overridden in the model.
     */
    protected static function cuid()
    {
        static::creating(function ($model) {
            $model->{self::uuidField()} = Cuid::cuid();
        });
    }



    // Option 2
    /* protected static function bootUsesUuid()
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
    } */
}
