<?php
require_once("libs/config.php");

class Db extends PDO
{
    public function __construct()
    {
        parent::__construct("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    }

}