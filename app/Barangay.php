<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    protected $table = 'tbl_barangays';

    public $timestamps = false;
    
    protected $guarded = [];

    public function town()
    {
        return $this->belongsTo(Town::class);
    }
}
