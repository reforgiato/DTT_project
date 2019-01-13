<?php

use Phalcon\Mvc\Model;

//database table containing admin login info
class Admin_info extends Model
{
    public $id;
    public $username;
    public $password;
}
