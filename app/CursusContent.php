<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursusContent extends Model
{
    protected $table = "cursuscontents";
    protected $fillable = [
        'section1', 'section2', 'section3'
    ];
}
