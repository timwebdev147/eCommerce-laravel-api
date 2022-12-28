<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'price', 'quantity', 'description', 'image'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
