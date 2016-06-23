<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Patient extends Model
{
    protected $table = 'patients';
    protected $guarded = ['id'];
    protected $appends = ['status', 'times'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function baseinfos()
    {
        return $this->hasMany('App\Models\Baseinfo');
    }

    public function epibios()
    {
        return $this->hasMany('App\Models\Epibio');
    }

    public function clinicals()
    {
        return $this->hasMany('App\Models\Clinical');
    }

    public function results()
    {
        return $this->hasMany('App\Models\Result');
    }

    public function olps()
    {
        return $this->hasMany('App\Models\Olp');
    }

    public function olks()
    {
        return $this->hasMany('App\Models\Olk');
    }

    public function cancers()
    {
        return $this->hasMany('App\Models\Cancer');
    }

    public function getStatusAttribute()
    {
        foreach ($this->baseinfos as $baseinfo) {
            if($baseinfo->times == 1)
                return '初诊';
            else
                return '第'.$baseinfo->times.'次复诊';
        }
    }

    public function getTimesAttribute()
    {
        return $this->baseinfos->count();
    }
}
