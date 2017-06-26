<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attribute';

    protected $fillable = [
        'id',
        'att_name',
        'att_descripiton',
        'att_max_lv',
        'class_id',
        'skill_id',
    ];

    public $timestamps = false;
}
