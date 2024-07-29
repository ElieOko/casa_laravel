<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    use HasFactory;
    protected $table = "TMaisons";
    protected $fillable = [
        'maison_type_id',
        'user_id',
        'material_build_id',
        'piece',
        'prix'
    ];
}
