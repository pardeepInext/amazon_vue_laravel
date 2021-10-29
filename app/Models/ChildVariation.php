<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ChildVariation extends Pivot
{
    use HasFactory;
    protected $fillable = ['child_id','variation_id'];

}
