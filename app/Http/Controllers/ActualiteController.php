<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualites;
use App\Categorie;
use App\Auteur;
use App\Region;
class ActualiteController extends Controller
{
    public function index(){
        $categories=Categorie::all();
        $auteurs=Auteur::all();
        $regions=Region::all();
        
        return view('actu.form', compact('categories', 'auteurs', 'regions'));
    }
    public function store(Request $request){


        $imagePath=request('photo')->store('uploads','public');
         Actualites::create([
                        'titre'=>$request->titre,
                        'description'=>$request->description,
                        'auteurs_id'=>$request->auteurs_id,
                        'regions_id'=>$request->regions_id,
                        'categories_id'=>$request->categories_id,
                        'photo'=>$imagePath
                    ]);             
                    return redirect()->route('actu.nouveau');    
            
    }

    public function details( string $actualites , int $id){
        $actualites=Actualites::where('categories_id', $id)->get();
        $categories=$actualites->actualites;
        return view('page.',compact('actualites'));
        }


}
