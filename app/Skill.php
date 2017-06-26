<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill_db';

    protected $fillable = [
        'id',
        'name',
        'descripiton',
        'max_level',
        'circle',
        'class_id',
        'url',
    ];

    public $timestamps = false;
}
