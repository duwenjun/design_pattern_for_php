<?php

$fruits = array(
    "apple" => "yummy",
    "orange" => "ah ya, nice",
    "grape" => "wow, I love it!",
    "plum" => "nah, not me"
);

$Iterator = new \ArrayIterator($fruits);
//$Iterator->ksort();
$Iterator->rewind();


echo "Iterating over: " . $Iterator->count() . " values\n";
while( $Iterator->valid() )
{
    echo $Iterator->key() . "=" . $Iterator->current(). "\n";
    $Iterator->next();
}