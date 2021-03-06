<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exe_Programs extends Model
{
    protected $table = 'exe_programs';
    protected $guarded = [];

    public function programs()
    {
        return $this->belongsTo('App\Programs');
    }
}
