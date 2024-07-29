<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePiece extends Model
{
    use HasFactory;
    protected $table = "TTypePieces";
    protected $fillable = [
        "nom",
        "description"
    ];
}
