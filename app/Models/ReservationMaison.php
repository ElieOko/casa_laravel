<?php

namespace App\Models;

use App\Models\User;
use App\Models\Maison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function maison() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'maison_id','id');
    }
}
