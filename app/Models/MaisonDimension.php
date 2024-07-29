<?php

namespace App\Models;

use App\Models\Maison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaisonDimension extends Model
{
    use HasFactory;
    protected $table = "TMaisonDimensions";
    protected $fillable = [
        'maison_id',
        'largeur',
        'longueur'
    ];
    public function maison() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'maison_id','id');
    }
}
