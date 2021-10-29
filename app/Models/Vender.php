<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vender extends Model
{
    use HasFactory;
    protected $fillable = ['name','image'];

    function products(){
        return $this->belongsToMany(Product::class)->as('vender')->withTimestamps();
    }
}
