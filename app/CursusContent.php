<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursusContent extends Model
{
    protected $table = "cursuscontents";
    protected $fillable = [
        'title1', 'section1'
    ];
}
