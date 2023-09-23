<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name', 'codeName', 'structureMaterial', 'clothMaterial', 'color', 'spongeQuality', 'resitance', 'pillowsIncluded', 'isAssemblyNeeded', 'leftSide', 'size', 'description', 'price'
    ];
}
