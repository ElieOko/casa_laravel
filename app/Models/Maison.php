<?php

namespace App\Models;

use App\Models\User;
use App\Models\MaisonType;
use App\Models\MaisonImage;
use App\Models\MaisonDimension;
use App\Models\MaisonTypePiece;
use App\Models\ReservationMaison;
use App\Models\TypeArchitectural;
use App\Models\CertificationMaison;
use App\Models\MateriauxConstruction;
use App\Models\MaisonZoneGeographique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Maison extends Model
{
    use HasFactory;
    protected $table = "TMaisons";
    protected $fillable = [
        'maison_type_id',
        'user_id',
        'material_build_id',
        'type_architectural_id',
        'piece',
        'prix',
    ];
    public function certification_maison(): HasMany
    {
        return $this->hasMany(CertificationMaison::class);
    }
    public function reservation_maison(): HasMany
    {
        return $this->hasMany(ReservationMaison::class);
    }
    public function maison_dimension() : HasMany
    {
        return $this->hasMany(MaisonDimension::class);
    }
    public function maison_type_piece() : HasMany
    {
        return $this->hasMany(MaisonTypePiece::class);
    }
    public function maison_image() : HasMany
    {
        return $this->hasMany(MaisonImage::class);
    }
    public function maison_zone_geographique(): HasMany
    {
        return $this->hasMany(MaisonZoneGeographique::class);
    }
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function maison_type() : BelongsTo
    {
        return $this->belongsTo(MaisonType::class,'maison_type_id','id');
    }
    public function type_architectural() : BelongsTo
    {
        return $this->belongsTo(TypeArchitectural::class,'type_architectural_id','id');
    }
    public function materiaux_construction() : BelongsTo
    {
        return $this->belongsTo(MateriauxConstruction::class,'material_build_id','id');
    }
}
