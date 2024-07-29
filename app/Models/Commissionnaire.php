<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
