<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CritereBudget extends Model
{
    use HasFactory;
    protected $table = "TCritereBudgets";
    protected $fillable = [
        'amountMin',
        'amountMax',
        'devise_id'
    ];
}
