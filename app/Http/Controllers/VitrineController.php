<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VitrineController extends Controller
{
    public function aff_serv()
    {
        return view('vitrine.services');
    }

    public function aff_propos()
    {
        return view('vitrine.propos');
    }

    public function aff_equipe()
    {
        return view('vitrine.equipe');
    }

    public function aff_temoignage()
    {
        return view('vitrine.temoignage');
    }
}
