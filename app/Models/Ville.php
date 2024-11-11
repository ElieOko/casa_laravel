<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;
    protected $table = "TVilles";
    protected $fillable = [
        'nom',
        'province_id'
    ];
    public function province() : BelongsTo
    {
        return $this->belongsTo(Province::class,'province_id','id');
    }
    public function commune(): HasMany
    {
        return $this->hasMany(Commune::class);
    }
}
