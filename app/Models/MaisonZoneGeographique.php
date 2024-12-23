<?php

namespace App\Models;

use App\Models\Maison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaisonZoneGeographique extends Model
{
    use HasFactory;
    protected $table = "TMaisonZoneGeographiques";
    protected $fillable = [
        'maison_id',
        'province_id',
        'ville_id',
        'commune',
        'avenue',
        'quartier',
        'latitude',
        'longitude'
    ];
    public function maison() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'maison_id','id');
    }
    public function province() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'province_id','id');
    }
    public function ville() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'ville_id','id');
    }
}
