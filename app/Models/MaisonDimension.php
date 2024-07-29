<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaisonDimension extends Model
{
    use HasFactory;
    protected $table = "TMaisonDimensions";
    protected $fillable = [
        'maison_id',
        'largeur',
        'longueur'
    ];
}
