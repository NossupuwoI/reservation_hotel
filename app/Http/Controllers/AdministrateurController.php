<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administration;
class AdministrateurController extends Controller
{
    public function table_administration()
    {
        $administrations = Administration::all();
        return view('administration.administration', compact('administrations'));
    }

    public function table_ajouter_administration(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'logo' => 'required',
            'image_fond' => 'required',
            'bienvenue' => 'required',            
          ]);
           $administration = new Administration();
           //uplodage
           if(!empty($request->file('logo'))){
            $url = $request->file('logo')->store('uploads/images/chambre', 'public');
            $photo=url('storage/' . $url);
            $administration['logo'] = $photo;
           }

           if(!empty($request->file('image_fond'))){
            $url = $request->file('image_fond')->store('uploads/images/chambre', 'public');
            $photo=url('storage/' . $url);
            $administration['image_fond'] = $photo;
           }

           $administration->nom = $request->nom;
           $administration->bienvenue = $request->bienvenue;
           $administration->save();
           return redirect ('/administration');
    }

    public function delete_administration($id)
    {
        $administrations = Administration::find($id);
        $administrations->delete();
        return redirect('/administration');
    }
}
