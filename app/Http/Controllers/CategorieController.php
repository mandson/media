<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;


class CategorieController extends Controller
{
    public function affiche(){
        $categories=Categorie::all();
        return view('layout.master', [
         
            'categories'=>$categories,
            ]);
    }

    public function index(){
        $categories=Categorie::all();
        return view('actu.nouveau', compact('categories'));
    }
    
    public function store(Request $request){
         Categorie::create([
                         
                        'nom'=>$request->nom,
                    ]);             
              return redirect()->route('actu.nouveau');   
            
            
                                  
    }
}

