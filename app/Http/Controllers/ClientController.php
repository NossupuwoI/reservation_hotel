<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function tableau_client()
    {
        $clients = Client::all();
        return view('client.client', compact('clients'));
    }
    public function ajouter_client(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mdp' => 'required',
            'telephone' => 'required',
            'date_naiss' => 'required',
            'photo' => 'required',
            'email' => 'required',
        ]);

        //Extensification de l'objet etudiant
        $client = new Client();
        //uplodage
        if (!empty($request->file('photo'))) {
            $url = $request->file('photo')->store('uploads/images/client', 'public');
            $photo = url('storage/' . $url);
            $client['photo'] = $photo;

            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->mdp = $request->mdp;
            $client->date_naiss = $request->date_naiss;
            $client->telephone = $request->telephone;
            //    $service->photo = $request->photo;
            $client->email = $request->email;
            $client->save();

            return redirect('/client');
        }
    }
    public function update_client($id)
    {
        $clients = Client::find($id);
        return view('client.updateclient', compact('clients'));
    }
    public function modifier_client_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'mdp' => 'required',
            'telephone' => 'required',
            'date_naiss' => 'required',
            'photo' => 'required',
            'email' => 'required',
        ]);

        //Extensification de l'objet etudiant
        $client =  Client::find($request->id);
        //uplodage
        if (!empty($request->file('photo'))) {
            $url = $request->file('photo')->store('uploads/images/client', 'public');
            $photo = url('storage/' . $url);
            $client['photo'] = $photo;

            $client->nom = $request->nom;
            $client->prenom = $request->prenom;
            $client->mdp = $request->mdp;
            $client->date_naiss = $request->date_naiss;
            $client->telephone = $request->telephone;
            //    $service->photo = $request->photo;
            $client->email = $request->email;
            $client->update();
            return redirect('/client');
        }
    }

    public function delete_client($id)
    {
        $clients = Client::find($id);
        $clients->delete();
        return redirect('/client');
    }
    
}
