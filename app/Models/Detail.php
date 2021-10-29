<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $fillable = ['detailable_type','detailable_id','detail'];

    function detailable()
    {
       return $this->morphTo();
    }


}
