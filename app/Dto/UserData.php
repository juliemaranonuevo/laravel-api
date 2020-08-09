<?php

namespace App\Dto;

final class UserData {

    /** @var integer */
    public $id;

    /** @var string */
    public $username;
    
    /** @var string */
    public $email;

    /** @var string */
    public $password;

    /** @var integer */
    public $role_type;

    /** @var string */
    public $phone_number;

    /** @var datetime */
    public $last_online;

    /** @var datetime */
    public $created_at;

    /** @var datetime */
    public $updated_at;
}
