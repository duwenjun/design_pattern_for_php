<?php

class Adapter extends Adaptee implements Target
{
    public function request()
    {
        $this->doSomething();
    }

}