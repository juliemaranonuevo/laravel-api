<?php

namespace App\Dto;

final class UserData {

    /** @var string */
    public $error_code;

    /** @var string */
    public $error_message;

    /** @var boolean */
    public $success;

    /** @var integer */
    public $id;

    /** @var string */
    public $username;
    
    /** @var string */
    public $email;

    /** @var string */
    public $first_name;

    /** @var string */
    public $middle_name;

    /** @var string */
    public $last_name;

    /** @var string */
    public $extension_name;

    /** @var string */
    public $photo_url;

    /** @var string */
    public $provider;

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
