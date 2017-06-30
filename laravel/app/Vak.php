<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    protected $table = 'vakken';
    public $timestamps = false;
    protected $fillable = ['jaar','periode','naam','ec', 'gehaald'];
}
