<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vragen extends Model
{
    protected $fillable = [
        'title', 'contentA', 'contentQ', 'image'
    ];

}
