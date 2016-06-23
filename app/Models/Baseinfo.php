<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baseinfo extends Model
{
    protected $table = 'baseinfos';
    protected $guarded = ['id'];
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
