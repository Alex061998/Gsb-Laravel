<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PdoGsb;
use MyDate;
class gestionnaireController extends Controller
{
	function afficherVisiteur()
	{
		if(!empty(session('visiteur')))
		{
			$lesVisiteurs = PdoGsb::afficherLesVisiteurs();
			return view('supVisiteur')
				->with('lesVisiteurs', $lesVisiteurs)
				->with('visiteur', session('visiteur'));
				
		}
		else
		{
			return view('connexion')->with('erreurs',null);

		}
	}
	function supVisiteur($id)
	{
		if(!empty(session('visiteur')))
		{ 
          $nb=PdoGsb::verification($id)[0];
          $lesVisiteurs = PdoGsb::afficherLesVisiteurs();
	        if (intval($nb) == 0) //intval() permet de convertir en entier les string
	        {
	        	 
				$lesVisiteurs = PdoGsb::afficherLesVisiteurs(); //si les visiteurs 
			 	PdoGsb::supUnVisiteur($id);
				return view('supVisiteur')
						->with('lesVisiteurs', $lesVisiteurs)
						->with('visiteur', session('visiteur'));	
	        }
			else
			{
			
				return view('check')
						->with('unVisiteur', PdoGsb::afficherUnVisiteur($id))
						->with('visiteur', session('visiteur'))
						->with('nbFrais', $nb);
			}
	}
	else
		{
			return view('connexion')->with('erreurs',null);
		}
	}
	function validSup($id)
	{
		$visiteur = PdoGsb::afficherUnVisiteur($id);
		PdoGsb::ajouterUneArchive($visiteur['id'],$visiteur['nom'],$visiteur['prenom'],$visiteur['dateEmbauche'],session('visiteur')['id']);
		PdoGsb::supprimerFicheFrais($id);
		PdoGsb::supUnVisiteur($id);
		$lesVisiteurs = PdoGsb::afficherLesVisiteurs();
			return view('supVisiteur')
				->with('lesVisiteurs', $lesVisiteurs)
				->with('visiteur', session('visiteur'));
	}

	function afficherArchives()
	{
		$lesVisiteurs = PdoGsb::afficherUneArchive();

		return view('archive')
		->with('lesVisiteurs', $lesVisiteurs)
		->with('visiteur', session('visiteur'));
		
	}

}