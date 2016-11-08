<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    protected $fillable = ['user_id', 'gift_id', 'status'];

    public function gift()
    {
        return $this->belongsTo('App\CaseGift');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
