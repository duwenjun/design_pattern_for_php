<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){

        echo "----刚到吴国的时候拆第一个---" . "\n";

        $context = new Context(new BackDoor());
        $context->operate();

        echo "\n\n\n";

        echo "---刘备乐不思蜀了，拆第二个了---" . "\n";
        $context = new Context(new GivenGreenLight());
        $context->operate();

        echo "\n\n\n";

        echo "----孙权追兵来了，拆第三个-----" . "\n";
        $context = new Context(new BlockEnemy());
        $context->operate();
    }
}

$worker = new client();