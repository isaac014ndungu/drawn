<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use APP\Models\post;

class image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'post_id',
        'users_id',


    ];

        public function posts(){
            return $this->belongTo(post::class)->belongTo(Data::class);

        }
    }

