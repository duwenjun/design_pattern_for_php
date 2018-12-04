<?php

class ConcreteTarget implements Target
{
    public function request()
    {
        echo "if you need any help, please call me!" . "\n";
    }
}