<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
