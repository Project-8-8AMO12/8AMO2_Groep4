<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antwoorden extends Model
{
    protected $fillable = [
        'vraagid', 'title', 'content', 'image'
    ];

    protected $primaryKey = 'antwoordid';
}
