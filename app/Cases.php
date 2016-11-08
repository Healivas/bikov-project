<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table = 'cases';

    protected $fillable = [
        'name',
        'price',
        'wins_cash',
        'percent',

    ];

    public function gifts()
    {
        return $this->hasMany('App\CaseGift', 'case_id');
    }

    public function chances()
    {
        return $this->hasMany('App\Chance', 'case_id');
    }

//    public function uer_cases()
//    {
//        return $this->belongsTo('App\UserCase');
//    }
}
