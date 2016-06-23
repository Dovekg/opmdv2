<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Epibio extends Model
{
    protected $table = 'epibios';
    protected $guarded = ['id'];
    public function partient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
