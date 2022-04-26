<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casal extends Model
{
    protected $fillable = ['nom', 'data_inici', 'data_final', 'n_places', 'id_ciutat'];
    public function casal(){
        return $this->hasMany('app\Ciutat');
    }
}
