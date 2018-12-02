<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        $HummerH1 = new HummerH1Model();
        $HummerH1->run();

        $HummerH2 = new HummerH2Model();
        $HummerH2->run();
    }
}

$worker = new client();