<?php

namespace App\Http\Controllers;
use App\Models\Chambre;
use App\Models\Categorie;
use App\Models\User;

use Illuminate\Http\Request;

class AfficherChambreController extends Controller
{


  public function room_controller()
  {
    
    $chambres = Chambre::where('statut', 'libre', array())->get();
    return view('presentation.room', compact('chambres'));
  }
}
