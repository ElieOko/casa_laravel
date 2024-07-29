<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaisonType extends Model
{
    use HasFactory;
    protected $table = "TMaisonTypes";
    protected $fillable = [
        'nom',
        'description'
    ];
}
