<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'title',
        'content',
        'namePerson',
        'mailPerson',
        'contactPerson'
    ];

    protected $primaryKey = 'contactid';
}
