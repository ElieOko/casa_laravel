<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaisonZoneGeographique extends Model
{
    use HasFactory;
    protected $table = "TMaisonZoneGeographiques";
    protected $fillable = [
        'maison_id',
        'province',
        'ville',
        'commune',
        'avenue',
        'quartier',
        'latitude',
        'longitude'
    ];
}
