<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;

class connexionController extends Controller
{
    function connecter(){

        return view('connexion')->with('erreurs',null);
    }
    function valider(Request $request){
        $login = $request['login'];
        $mdp = $request['mdp'];
        $visiteur = PdoGsb::getInfosVisiteur($login,$mdp);
        if(!is_array($visiteur)){
            $erreurs[] = "Login ou mot de passe incorrect(s)";
            return view('connexion')->with('erreurs',$erreurs);
        }
        else{
            session(['visiteur' => $visiteur]);
        }
        if ($visiteur['role'] == 0)
        {
             return view('sommaire')->with('visiteur',session('visiteur'))
                        ->with('co');
        }
        else if ($visiteur['role'] == 1)
        {
            return view('newrole')->with('visiteur',session('visiteur'))
                    ->with('co');
        }
    }
    function deconnecter(){
            session(['visiteur' => null]);
            return redirect()->route('chemin_connexion');
    }
}
