<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Auteur;
class AuteurController extends Controller
{
    public function index(){
        return view('actu.nouveau');
    }
    public function store(Request $request){

    Auteur::create([
                         
        'nom'=>$request->nom,
    ]); 
    return redirect()->route('actu.nouveau');   
   }
}
