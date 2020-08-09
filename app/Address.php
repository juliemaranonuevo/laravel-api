<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'tbl_addresses';

    protected $guarded = [];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
