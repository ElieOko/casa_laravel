<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commune extends Model
{
    use HasFactory;
    protected $table = "TCommunes";
    protected $fillable = [
        'nom',
        'ville_id'
    ];
    public function ville() : BelongsTo
    {
        return $this->belongsTo(Ville::class,'ville_id','id');
    }
    public function quartier(): HasMany
    {
        return $this->hasMany(Quartier::class);
    }
}
