<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeur extends Model
{
    //
       protected $table="employeurs";
     protected $fillable=[
           'nom',
           'prenom',
           'date',
           'adresse',
           'telephone',
           'exp',
           'user_id',
           'projts_id',
    ];
       public function projet(){
      return $this->belongsTo(\App\projet::class);
    }

    public function user(){
      return $this->belongsTo(\App\User::class);
    }
}
