<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avenue extends Model
{
    use HasFactory;
    protected $table = "TAvenues";
    protected $fillable = [
        'nom',
        'quartier_id'
    ];
    public function quartier() : BelongsTo
    {
        return $this->belongsTo(Quartier::class,'quartier_id','id');
    }
    
}
