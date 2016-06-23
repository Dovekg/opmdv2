<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinical extends Model
{
    protected $table = 'clinicals';
    protected $guarded = ['id'];
    public function partient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
