<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserType extends Model
{
    use HasFactory;
    protected $table = "TUserTypes";
    protected $fillable = [
        'nom'
    ];
    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
