<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseGift extends Model
{
    protected $fillable = ['cash', 'case_id'];

    public function cases()
    {
        return $this->belongsTo('App\Cases', 'case_id');
    }

}
