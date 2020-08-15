<?php

namespace App\Dto;

final class RegistrationCompletionData {

    /** @var string */
    public $id;

    /** @var string */
    public $email;

    /** @var string */
    public $phone_number;

    /** @var string */
    public $otp;

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

     /** @var boolean */
    public $verified;
}
