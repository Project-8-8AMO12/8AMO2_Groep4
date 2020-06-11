<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'title',
        'subject',
        'content',
        'namePerson',
        'mailPerson',
        'contactPerson'
    ];

    protected $primaryKey = 'contactid';
}
