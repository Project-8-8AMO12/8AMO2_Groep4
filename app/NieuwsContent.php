<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NieuwsContent extends Model
{
    protected $table = "nieuwscontents";
    protected $fillable = [
        'section1', 'section2'
    ];
}
