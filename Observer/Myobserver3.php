<?php

class MyObserver3 implements SplObserver {

    public function update(SplSubject $subject) {
        echo __CLASS__ . ' - ' . $subject->getName() . "\n";
    }

}