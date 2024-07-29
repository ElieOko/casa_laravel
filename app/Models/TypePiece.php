<?php

namespace App\Models;

use App\Models\MaisonTypePiece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypePiece extends Model
{
    use HasFactory;
    protected $table = "TTypePieces";
    protected $fillable = [
        "nom",
        "description"
    ];
    public function maison_type_piece(): HasMany
    {
        return $this->hasMany(MaisonTypePiece::class);
    }
}
