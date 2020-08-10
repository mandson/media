<?php

namespace App\Http\Controllers;
use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function index(){
        return view('actu.nouveau');
    }
    public function store(Request $request){
    Region::create([
                         
        'nom'=>$request->nom,
    ]); 
    return redirect()->route('actu.nouveau');    
   }
}
