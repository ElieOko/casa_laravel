<?php

namespace App\Models;

use App\Models\Maison;
use App\Models\TypePiece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaisonTypePiece extends Model
{
    use HasFactory;
    protected $table = "TMaisonTypePieces";
    protected $fillable = [
        "maison_id",
        "type_piece_id",
        "nombre_piece",
        "dimension"
    ];
    public function maison() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'maison_id','id');
    }
    public function type_piece() : BelongsTo
    {
        return $this->belongsTo(TypePiece::class,'type_piece_id','id');
    }
}
