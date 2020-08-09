<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'tbl_accounts';

    protected $guarded = [];

    public function authMediator()
    {
        return $this->belongsTo(AuthMediator::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function useDelivery()
    {
        return $this->hasMany(UseDelivery::class);
    }
}
