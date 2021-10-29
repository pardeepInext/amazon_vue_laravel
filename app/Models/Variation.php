<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;

    protected $fillable = ['product_id','name'];
    
    function variationDetails(){
        return $this->morphMany(Detail::class,'detailable');
    }

}
