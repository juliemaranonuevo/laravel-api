<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'tbl_roles';

    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function userThirdParty()
    {
        return $this->hasMany(UserThirdParty::class);
    }
}
