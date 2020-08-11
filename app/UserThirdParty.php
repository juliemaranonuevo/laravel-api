<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserThirdParty extends Model
{
    protected $table = 'tbl_user_third_parties';

    protected $guarded = [];

    // public function role()
    // {
    //     return $this->belongsTo(Role::class);
    // }

    public function authMediator()
    {
        return $this->belongsTo(AuthMediator::class);
    }
}
