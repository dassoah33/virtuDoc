<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;

class DashboardController extends Controller
{
    public function index()
    {
        $utilisateur = Utilisateur::where('id','=',session('utilisateur'))->first();

        return view('dashboard.index',compact('utilisateur'));
    }
}
