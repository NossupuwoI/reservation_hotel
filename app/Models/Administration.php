<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'logo',
        'image_fond',
        'bienvenue',
        'num_chambre',
        'num_etage',
    ];
}
