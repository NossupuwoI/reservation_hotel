<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function afficher_dashboard()
    {
       
        return view('/dashboard');
    }
}
