<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commissionnaire extends Model
{
    use HasFactory;
    protected $table = "TCommissionnaires";
    protected $fillable = [
        'nom_famille',
        'prenom',
        'genre',
        'telephone',
        'date_naissance',
        'image_profil',
        'user_id'
    ];
}
