<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $table = "homecontents";
    protected $fillable = [
        'section1', 'section2'
    ];
}
