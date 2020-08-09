<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'tbl_towns';

    public $timestamps = false;
    
    protected $guarded = [];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function barangay()
    {
        return $this->hasMany(Barangay::class);
    }
}
