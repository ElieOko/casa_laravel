<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Client;
use App\Models\Maison;
use App\Models\Bailleur;
use App\Models\UserType;
use App\Models\Commissionnaire;
use App\Models\UserSatisfaction;
use App\Models\ReservationMaison;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = "TUsers";
    protected $fillable = [
        'username',
        'email',
        'password',
        'user_type_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function bailleur(): HasMany
    {
        return $this->hasMany(Bailleur::class);
    }
    public function client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
    public function commissionnaire(): HasMany
    {
        return $this->hasMany(Commissionnaire::class);
    }
    public function maison(): HasMany
    {
        return $this->hasMany(Maison::class);
    }
    public function reservation_maison(): HasMany
    {
        return $this->hasMany(ReservationMaison::class);
    }
    public function user_satisfaction(): HasMany
    {
        return $this->hasMany(UserSatisfaction::class);
    }
    public function user_type() : BelongsTo
    {
        return $this->belongsTo(UserType::class,'user_type_id','id');
    }
}
