<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaisonCritere extends Model
{
    use HasFactory;
    protected $table = "TMaisonCriteres";
    protected $fillable = [
        'maison_id',
        'critere_id',
        'note',
        'is_active'
    ];
}
