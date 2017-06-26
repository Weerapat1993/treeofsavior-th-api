<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'class_db';

    protected $fillable = [
        'id',
        'name',
        'rank',
        'class_type',
        'img_url',
    ];

    public $timestamps = false;
}
