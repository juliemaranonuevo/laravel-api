<?php

namespace App\Dto;

final class OneTimePasswordData {

    /** @var integer */
    public $id;
    
    /** @var string */
    public $email;

    /** @var number */
    public $one_time_password;

    /** @var string */
    public $phone_number;

     /** @var string */
     public $error_code;

     /** @var string */
     public $error_message;
 
     /** @var boolean */
     public $success;
     
}
