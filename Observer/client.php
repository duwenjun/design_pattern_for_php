<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        $observer1 = new MyObserver1();
        $observer2 = new MyObserver2();
        $observer3 = new MyObserver3();

        $subject = new MySubject("test");
        $subject->attach($observer1);
        $subject->attach($observer2);
        $subject->notify();

        echo "--------------\n";
        $subject->detach($observer2);
        $subject->attach($observer3);
        $subject->notify();
    }
}

$worker = new client();