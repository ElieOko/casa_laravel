<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationMaison extends Model
{
    use HasFactory;
    protected $table = "TCertificationMaisons";
    protected $fillable = [
        'maison_id',
        'certified'
    ];

}
