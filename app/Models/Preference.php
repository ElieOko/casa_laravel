<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;
    protected $table = "TPreferences";
    protected $fillable = [
        'user_id',
        'critere_id',
        "type_maison_id"
    ];
}
