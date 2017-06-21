<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    protected $fillable = ['jaar','periode','naam','ec', 'gehaald'];

}
