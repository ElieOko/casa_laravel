<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationMaison extends Model
{
    use HasFactory;
    protected $table = "TReservationMaisons";
    protected $fillable = [
        'maison_id',
        'user_id',
        'date_reservation',
        'heure_reserver',
        'plage_heure_debut',
        'plage_heure_fin',
        'is_active'
    ];
}
