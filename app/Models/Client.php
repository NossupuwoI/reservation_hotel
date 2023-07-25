<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'mdp',
        'date_naiss',
        'telephone',
        'photo',
        'email',
    ];
    // public function User()
    // {
    //     return $this->hasMany(User::class);
    // }
}
