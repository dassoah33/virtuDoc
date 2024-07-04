<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Utilisateur;
use App\Models\Log;

class LogController extends Controller
{
    public function index()
    {
        $utilisateur = Utilisateur::where('id', session('utilisateur'))->first();
    
        // Récupérer les logs en ordre décroissant
        $logs = Log::orderBy('created_at', 'desc')->get();
    
        return view('logs.index', compact('utilisateur', 'logs'));
    }
    

}
