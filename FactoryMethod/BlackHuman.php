<?php

class BlackHuman implements Human
{

    public function getColor()
    {
        echo "黑人的皮肤是黑色的" . "\n";
    }

    public function talk()
    {
        echo "黑人会说话，一般人同不懂" . "\n";
    }

}