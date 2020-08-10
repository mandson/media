<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=['id','nom'];
    
    public function actualites(){
        return $this->hasMany('App\Actualites');
    }
}
