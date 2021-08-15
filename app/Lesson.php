<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    protected  $fillable = ['id', 'day', 'group', 'lesson1', 'room1', 'lesson2', 'room2', 'lesson3', 'room3', 'teacher'];
}
