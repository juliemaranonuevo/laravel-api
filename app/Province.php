<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'tbl_provinces';

    public $timestamps = false;
    
    protected $guarded = [];

    public function town()
    {
        return $this->hasMany(Town::class);
    }
}
