<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'vender_id'];

    function children()
    {
        return $this->hasMany(Child::class);
    }

    function variations()
    {
        return $this->hasMany(Variation::class);
    }

    function images(){
        return $this->morphMany(Image::class,'imageable');
    }

    function details(){
        return $this->morphMany(Detail::class,'detailable');
    }

    function stock(){
        return $this->hasOne(ChildVariation::class);
    }
}
