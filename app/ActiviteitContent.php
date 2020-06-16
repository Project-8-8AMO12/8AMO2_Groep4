<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiviteitContent extends Model
{
    protected $table = "activiteitcontents";
    protected $fillable = [
        'title',
        'content',
    ];
}
