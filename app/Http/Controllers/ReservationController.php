<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Chambre;
use App\Models\Client;

class ReservationController extends Controller
{
    public function afficher_reservation($id)
    {
        $chambres = Chambre::all();
        $chambres = Chambre::find($id);
        $clients = Client::all();
        $clients = Client::find($id);
        return view('presentation.reservation', compact('chambres', 'clients'));
    }

    public function ajouter_reservation(Request $request)
    {
        $request->validate([
            'id_chambre' => 'required',
            'num_chambre' => 'required',
            'num_etage' => 'required',
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'email_client'  => 'required',
            'telephone_client' => 'required',
            'date_debut' => 'required',
            'date_fin'   => 'required',
            'heures'   => 'required',  
            'demande' => 'required',
            'statut' => 'required',
        ]);

        $reservation = new Reservation();

        $reservation ->id_chambre = $request->id_chambre;
        $reservation ->num_chambre = $request->num_chambre;
        $reservation ->num_etage = $request->num_etage;
        $reservation -> nom_client = $request->nom_client;
        $reservation -> prenom_client = $request->prenom_client;
        $reservation -> email_client = $request->email_client;
        $reservation -> telephone_client = $request->telephone_client;
        $reservation -> date_debut = $request->date_debut;
        $reservation -> date_fin = $request->date_fin;
        $reservation -> heures = $request->heures;
        $reservation -> demande = $request->demande;
        $reservation -> statut = $request->statut;

        $reservation->save();
        
        return redirect('/room');
    }

    public function carracteristique_chambre($id)
    {
        $chambres = Chambre::find($id);
        return view('presentation.carracteristique', compact('chambres'));
    }

    public function afficher_demande_reservation()
    {
        $reservations = Reservation::all();
        return view('admin.demande', compact('reservations'));
    }

    public function valid_demande($id)
    {
      $reservations = Reservation::find($id);
      return view('admin.valide', compact('reservations'));
    }

    public function valider_reservation(Request $request)
    {
        $request->validate([
            'id_chambre' => 'required',
            'num_chambre' => 'required',
            'num_etage' => 'required',
            'nom_client' => 'required',
            'prenom_client' => 'required',
            'email_client'  => 'required',
            'telephone_client' => 'required',
            'date_debut' => 'required',
            'date_fin'   => 'required',
            'heures'   => 'required',
            'demande' => 'required',
            'statut' => 'required',
        ]);

        $reservation = Reservation::find($request->id);

        $reservation ->id_chambre = $request->id_chambre;
        $reservation ->num_chambre = $request->num_chambre;
        $reservation ->num_etage = $request->num_etage;
        $reservation -> nom_client = $request->nom_client;
        $reservation -> prenom_client = $request->prenom_client;
        $reservation -> email_client = $request->email_client;
        $reservation -> telephone_client = $request->telephone_client;
        $reservation -> date_debut = $request->date_debut;
        $reservation -> date_fin = $request->date_fin;
        $reservation -> heures = $request->heures;
        $reservation -> demande = $request->demande;
        $reservation -> statut = $request->statut;

        $reservation-> update();
        return redirect('/demande');
    }

    }

