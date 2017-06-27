<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vak extends Model
{
    protected $table = 'vakken';
    protected $fillable = ['jaar','periode','naam','ec', 'gehaald'];
    public function setUpdatedAtAttribute($value){
        
    }

}
