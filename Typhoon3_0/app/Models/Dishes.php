<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dishes extends Model
{
    use HasFactory;
    public function images(){
        return $this->hasMany('App\DishesImage');
    }
    protected $fillable = [
        'name', 'description', 'price', 'grams'
    ];
}
