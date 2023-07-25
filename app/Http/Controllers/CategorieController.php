<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\User;


class CategorieController extends Controller
{
    public function tableau_categorie()
    {
         $categories = Categorie::all();
         $users = User::all();
         return view('categorie.categorie', compact('categories','users'));
    }
    public function ajouter_categorie(Request $request)
    {
      $request->validate([
        'User' => 'required',
        'nom' => 'required',
        'libelle' => 'required',
      ]);

      //Extensification de l'objet etudiant
       $categorie = new Categorie();
       $categorie->User = $request->User;
       $categorie->nom = $request->nom;
       $categorie->libelle = $request->libelle;
       $categorie->save();

      return redirect('/categorie');
    }

    public function delete_categorie($id)
    {
      $categorie = Categorie::find($id);
      $categorie->delete();
      return redirect('/categorie');
    }

    public function update_categorie($id)
    {
      $categories = Categorie::find($id);
      return view('categorie.updatecategorie', compact('categories'));
    }
    public function modifier_categorie_traitement(Request $request)
    {
        $request->validate([
            'User' => 'required',
            'nom' => 'required',
            'libelle' => 'required',
          ]);

          //Extensification de l'objet etudiant
          $categorie = Categorie::find($request->id);
           $categorie->User = $request->User;
           $categorie->nom = $request->nom;
           $categorie->libelle = $request->libelle;
          $categorie->update();

          return redirect('/categorie');
       }

}
