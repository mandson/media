<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{
    protected $fillable=['id','titre',
        'description','categories_id',
        'auteurs_id','regions_id','photo'
     ];
     public function auteurs(){
        return $this->belongsTo('App\Auteur');
    }
    public function categories(){
        return $this->belongsTo('App\Categorie');
    }
    public function regions(){
        return $this->belongsTo('App\Region');
    }
}
