<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\Docteur;


class DocteurController extends Controller
{
    //

    public function index(){
        $utilisateur = Utilisateur::where('id','=',session('utilisateur'))->first();
            
        $docteurs = Docteur::all();
        
        return view('docteurs.index',compact('utilisateur','docteurs'));
    }

}
