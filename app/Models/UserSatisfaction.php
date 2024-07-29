<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSatisfaction extends Model
{
    use HasFactory;
    protected $table = "TUserSatisfactions";
    protected $fillable = [
        'user_id',
        'attente_satisfaction',
    ];
}
