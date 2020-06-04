<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikelen extends Model
{
    protected $fillable = [
        'title', 'contentartikel', 'userid'
    ];
}
