<?php
include_once __DIR__ . '/User.php';

class RegistereUser extends User
{
    protected $userName, $password;
    protected $discount = 20;
}
