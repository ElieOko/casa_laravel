<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;
    protected $table = "TProvinces";
    protected $fillable = [
        'nom',
        'country_id'
    ];
    public function country() : BelongsTo
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function maison_zone_geographique(): HasMany
    {
        return $this->hasMany(MaisonZoneGeographique::class);
    }
    
    public function ville(): HasMany
    {
        return $this->hasMany(Ville::class);
    }
}
