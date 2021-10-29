<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['imageable_type','imageable_id','name'];
    protected $appends = ['image'];

    public function imageable()
    {
        return $this->morphTo();
    }

    function getImageAttribute(){
        return asset("img/uploads/$this->name");
    }


}
