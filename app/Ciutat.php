<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciutat extends Model
{
    protected $fillable = ['nom'];


    public function ciutat(){
        return $this->belongsTo('app\Casal');
    }
}
