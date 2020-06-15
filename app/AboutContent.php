<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $table = "aboutcontents";
    protected $fillable = [
        'intro',
        'title1',
        'section1',
        'title2',
        'section2',
        'title3',
        'section3',
    ];

}
