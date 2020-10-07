<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = "persons";
    protected $fillable = [
        'id',
        'prefix',
        'fname',
        'lname',
        'ipass',
        'type',
        'position',
        'level',
        'rank',
        'statustype',
        'belong',
        'office',
        'phone',
        'local_phone',
        'ustatus'
    ];
}
