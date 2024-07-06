<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;

use App\Models\Log;
use App\Models\Docteur;

class DashboardController extends Controller
{
    public function index()
    {
        $utilisateur = Utilisateur::where('id','=',session('utilisateur'))->first();

        $logs = Log::count();

        $docteurs = Docteur::all();

        return view('dashboard.index',compact('utilisateur','logs','docteurs'));
    }
}
