<?php

class MyObserver2 implements SplObserver {

    public function update(SplSubject $subject) {
        echo __CLASS__ . ' - ' . $subject->getName() . "\n";
    }

}