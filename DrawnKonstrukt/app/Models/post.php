<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\image;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'author',
        'body',
        'cover',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function images(){
        return $this->hasMany(image::class);
    }
}
