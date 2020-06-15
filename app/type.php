<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    //;
    protected $table='types';
     public function projets(){
      return $this->hasMany(\App\projet::class);
    }
}
