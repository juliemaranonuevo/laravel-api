<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UseDelivery extends Model
{
    protected $table = 'tbl_use_deliveries';

    protected $guarded = [];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
