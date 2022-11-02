<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable=[
        'post_id',
        'users_id',


    ];

        public function posts(){
            return $this->belongTo(post::class);

        }
        public function user(){
            return $this->belongTo(user::class,'id', 'users_id')->withTrashed();

        }
}
