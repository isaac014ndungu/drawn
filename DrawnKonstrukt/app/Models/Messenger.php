<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messenger extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic_id',
        'sender_id',
        'content',
        'read_at',
    ];

    protected $dates = [
        'sent_at',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function sender()
    {
        return $this->hasOne(User::class, 'id', 'sender_id')->withTrashed();
    }
}
