<?php

namespace App\Traits;

use EndyJasmi\Cuid;

/**
 * Generates Collision-resistance Unique ID
 */
trait GenerateCUID
{
    /**
     * Generate CUID when creating model.
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
        return 'id';
    }

    /**
     * Use if boot() is overridden in the model.
     */
    protected static function cuid()
    {
        static::creating(function ($model) {
            $model->{self::uuidField()} = Cuid::cuid();
            $model->keyType = 'string';
            $model->incrementing = false;
            $model->{$model->getKeyName()} = $model->{$model->getKeyName()} ?: (string) Cuid::cuid();
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
