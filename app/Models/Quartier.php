<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Quartier extends Model
{
    use HasFactory;
    protected $table = "TQuartiers";
    protected $fillable = [
        'nom',
        'commune_id'
    ];
    public function commune() : BelongsTo
    {
        return $this->belongsTo(Commune::class,'commune_id','id');
    }
    public function avenue(): HasMany
    {
        return $this->hasMany(Avenue::class);
    }
}
