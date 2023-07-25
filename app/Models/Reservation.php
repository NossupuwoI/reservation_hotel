<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_chambre',
        'num_chambre',
        'num_etage',
        'nom_client',
        'prenom_client',
        'email_client' ,
        'telephone_client',
        'date_debut',
        'date_fin'  ,
        'heures',
        'demande',
        'statut',
    ];
    public function Client()
    {
        return $this->hasMany(client::class);
    }
    public function Service()
    {
        return $this->belongnToMany(Service::class);
    }
}
