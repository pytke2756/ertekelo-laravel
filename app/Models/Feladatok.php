<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feladatok extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'szoveges_ert', 'pontszam'];

    protected $visible = [
        'id',
        'url',
        'szoveges_ert',
        'pontszam',
    ];
}
