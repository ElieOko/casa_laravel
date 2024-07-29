<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
