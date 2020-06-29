<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WinkelContent extends Model
{
    protected $table = "winkelcontents";
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
