<?php

ini_set('display_errors', true);
error_reporting(E_ALL);
include('../autoload.php');


class client {

    public function __construct(){
        $sequence = ['engine boom', 'start', 'stop'];

        $BenzModel = new BenzModel();
        $BenzModel->setSequence($sequence);
        $BenzModel->run();

        $BMWModel = new BMWModel();
        $BMWModel->setSequence($sequence);
        $BMWModel->run();

    }
}

$worker = new client();