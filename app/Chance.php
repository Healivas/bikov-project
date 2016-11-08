<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chance extends Model
{
    protected $fillable = [
        'case_id',
        'chance',
        'raise'
    ];
}
