<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id', 'product', 'unit_price', 'quantity', 'total'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

