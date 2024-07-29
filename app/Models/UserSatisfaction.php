<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSatisfaction extends Model
{
    use HasFactory;
    protected $table = "TUserSatisfactions";
    protected $fillable = [
        'user_id',
        'attente_satisfaction',
    ];
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
