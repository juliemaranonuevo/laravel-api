<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OneTimePassword extends Model
{
    protected $table = 'tbl_one_time_passwords';

    protected $guarded = [];

    public function authMediator()
    {
        return $this->belongsTo(AuthMediator::class);
    }
}
