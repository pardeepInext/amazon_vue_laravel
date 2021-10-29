<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'name'];

    function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    function variations()
    {
        return $this->belongsToMany(Variation::class)->using(ChildVariation::class)->as('stock')->withPivot('stock','price','sku')->with('variationDetails');
    }
}
