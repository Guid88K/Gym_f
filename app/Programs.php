<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programs extends Model
{
    protected $guarded = [];

    public function exe_programs()
    {
        return $this->hasMany('App\Exe_Programs');
    }
}
