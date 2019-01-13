<?php

use Phalcon\Mvc\Model;

//database table containing the articles of the website

class Article_table extends Model
{
    public $id;
    public $date;
    public $title;
    public $preview;
    public $main;
}
