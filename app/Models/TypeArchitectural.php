<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeArchitectural extends Model
{
    use HasFactory;
    protected $table = "TMateriauxConstructions";
    protected $fillable = [
        "nom",
    ];
}
