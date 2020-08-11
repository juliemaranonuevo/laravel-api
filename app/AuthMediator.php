<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthMediator extends Model
{
    protected $table = 'tbl_auth_mediators';

    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function userThirdParty()
    {
        return $this->hasMany(UserThirdParty::class);
    }

    // public function account()
    // {
    //     return $this->belongsTo(Account::class);
    // }

    public function oneTimePassword()
    {
        return $this->hasMany(OneTimePassword::class);
    }

    public function account()
    {
        return $this->hasMany(Account::class);
    }

    public function role()
    {
        return $this->hasMany(Role::class);
    }
}
