<?php

namespace App\Models;

use App\Models\Maison;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MaisonImage extends Model
{
    use HasFactory;
    protected $table = "TMaisonImages";
    protected $fillable = [
        'maison_id',
        'PictureName',
        'PicturePath',
        'PublicUrl',
        'PictureOriginalName'
    ];
    public function maison() : BelongsTo
    {
        return $this->belongsTo(Maison::class,'maison_id','id');
    }
}
