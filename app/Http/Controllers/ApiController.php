<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Utilisateur;
use App\Models\Log;


class ApiController extends Controller
{
    //
    public function checkSessionStatus(Request $request, $code)
    {
        $session = Session::where('code', $code)->first();

        if ($session && $session->est_utilise) {

            $utilisateur = Utilisateur::where('payload',$session->payload)->first();

            $request->session()->put('utilisateur',$utilisateur->id);

            $logs = Log::create([
                'utilisateur_id' => $utilisateur->id,
                'date_de_connexion' => now()
            ]);

            return response()->json(['status' => 'used']);
        
        }

        return response()->json(['status' => 'unused']);
    }


    public function updateSession(Request $request)
    {
        // Validation des données de la requête
        $request->validate([
            'code' => 'required|string',
            'payload' => 'required|string',
        ]);

        // Récupération de la session correspondante
        $session = Session::where('code', $request->code)->first();

        if ($session) {
            // Mise à jour de la session
            $session->update([
                'payload' => $request->payload,
                'est_utilise' => 1,
            ]);

            return response()->json(['status' => 'success', 'message' => 'Session updated successfully']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'Session not found'], 404);
        }
    }

}
