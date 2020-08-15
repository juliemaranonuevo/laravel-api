<?php

namespace App\Dto;

final class UserData {

    /** @var integer */
    public $id;

    /** @var integer */
    public $uId;

    /** @var string */
    public $email;

    /** @var string */
    public $name;

    /** @var string */
    public $username;

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

    /** @var integer */
    public $role_type;

    /** @var string */
    public $provider;

    /** @var string */
    public $phone_number;

    /** @var datetime */
    public $last_online;

    /** @var boolean */
    public $verified;

    /** @var datetime */
    public $created_at;

    /** @var datetime */
    public $updated_at;

     /** @var string */
     public $error_code;

     /** @var string */
     public $error_message;
 
     /** @var boolean */
     public $success;
}
