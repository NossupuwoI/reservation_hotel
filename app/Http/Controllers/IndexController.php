<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Afficher_chambre()
  {
    return view('index');
  }
}
