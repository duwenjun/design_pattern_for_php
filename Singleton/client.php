<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        $Emperor = Emperor::getSingleton();
        $Emperor->say();
    }
}

$worker = new client();