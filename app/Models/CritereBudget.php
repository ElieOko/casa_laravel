<?php

namespace App\Models;

use App\Models\Devise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CritereBudget extends Model
{
    use HasFactory;
    protected $table = "TCritereBudgets";
    protected $fillable = [
        'amountMin',
        'amountMax',
        'devise_id'
    ];
    public function devise() : BelongsTo
    {
        return $this->belongsTo(Devise::class,'devise_id','id');
    }
}
