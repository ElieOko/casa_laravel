<?php

namespace App\Models;

use App\Models\Maison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MateriauxConstruction extends Model
{
    use HasFactory;
    protected $table = "TMateriauxConstructions";
    protected $fillable = [
        'nom'
    ];
    public function maison(): HasMany
    {
        return $this->hasMany(Maison::class);
    }
}
