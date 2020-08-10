<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualites;
use App\Categorie;
class AfficheController extends Controller
{
    public function affiche(){
        $actualites=Actualites::all();
        return view('pages.politique', compact('actualites'));
    }
    // public function details(){
    //     $categories= Categorie::get();
    //     $categories=Categorie::find($id);
    //     $actualites=$categories->actualite;
        
    //     return view('layout.test',compact('categories', 'actaulites'));
    // }
    // public function essai(){
        
    //     $categories= Categorie::all();
    //    return view('layout.list',compact('categories'));
    // }
    // public function details(string $categorie, int $id){
    //     $categories= Categorie::all();
    //     $actualites= Actualites::all();
    //     $categorie=Categorie::find($id);
    //     $id=$categorie->id;
    //     $actualite=$categorie->actualite;
    //     return view('layout.details',compact('categories', 'actaulite', 'id'));
    // }
}