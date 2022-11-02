<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Products extends Model
{
    use HasFactory;

    protected $fillable=[
            'name',
            'Product',
            'Quantity',
            'CostPerItem',
            'Total',
            'GrandTotal',
            'Notes',

    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'User_id', 'name');
    }
}
