<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $table = "TCountries";
    protected $fillable = [
        'nom',
        'code'
    ];
    public function province(): HasMany
    {
        return $this->hasMany(Province::class);
    }
}
