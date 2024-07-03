<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function getSessionCode()
    {
        $bgColor = '#D4ECFF';
        $title = 'Placez votre carte d’accès sur votre smartphone pour vous authentifier';
        $circlesColor = 'bleu';
        $sessionCode = '0123';

        return view('auth.login_session_code', [
            'bgColor' => $bgColor,
            'title' => $title,
            'circlesColor' => $circlesColor,
            'sessionCode' => $sessionCode,
        ]);
    }

    public function login_post(Request $request)
    {
        // Valider les entrées du formulaire
        $request->validate([
            'username' => 'required|string',
            'mot_de_passe' => 'required|string',
        ]);

        // Vérifier les informations d'identification
        $username = $request->input('username');
        $password = $request->input('mot_de_passe');

        if (($username === 'Dassoah' || $username === 'Cynthia') && $password === '1234') {
            // Rediriger vers le tableau de bord
            return redirect()->route('dashboard');
        } else {
            // Rediriger vers la page précédente avec un message d'erreur
            return redirect()->back()->withErrors(['login' => 'Nom d\'utilisateur ou mot de passe incorrect']);
        }
        
    }

    public function logout(){
        return view('auth.login');
    }
}
