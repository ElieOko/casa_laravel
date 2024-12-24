<?php

namespace App\Models;

use App\Models\CritereBudget;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Devise extends Model
{
    use HasFactory;
    protected $table = "TDevises";
    protected $fillable = [
        'nom',
        'code',
        'taux',
        'symbole'
    ];
    public function critere_budget(): HasMany
    {
        return $this->hasMany(CritereBudget::class);
    }
}
