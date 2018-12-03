<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        //定义接头人
        $invoker = new Invoker();

        //客户需要增加一个需求
        echo "客户需要增加一个需求" . "\n";
        $command = new AddRequirementCommand();

        $invoker->setCommand($command);

        $invoker->action();
    }
}

$worker = new client();