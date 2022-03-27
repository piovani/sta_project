<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Ramsey\Uuid\Uuid;


class Model extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;

    public $uuid = true;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if ($model->uuid == true && empty($model->id)) {
                $model->id = (string) Uuid::uuid1();
            }
        });
    }
}
