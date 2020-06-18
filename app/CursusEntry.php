<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursusEntry extends Model
{
    protected $table = "cursusentries";
    protected $fillable = [
        'title', 'section'
    ];
}
