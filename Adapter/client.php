<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        $target = new ConcreteTarget();
        $target->request();

        $target2 = new Adapter();
        $target2->request();
    }
}

$worker = new client();