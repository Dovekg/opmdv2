<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Olk extends Model
{
    protected $guarded = ['id'];
    public function partient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
