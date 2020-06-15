<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    //
   protected $table="projets";
     protected $fillable=[
           'nom',
           'ter',
           'date',
            'user_id',
            'type_id',
    ];
       public function type(){
      return $this->belongsTo(\App\type::class);
    }

    public function user(){
      return $this->belongsTo(\App\User::class);
    }
    public function employeurs(){
      return $this->hasMany(\App\employeur::class);
    }
}
