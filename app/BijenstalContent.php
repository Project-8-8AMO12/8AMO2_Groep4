<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BijenstalContent extends Model
{
    //
    protected $table = "BijenstalContents";
    protected $fillable = [
        'title1',
        'section1',
    ];
}
