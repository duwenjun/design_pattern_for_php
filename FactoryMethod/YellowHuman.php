<?php

class YellowHuman implements Human
{

    public function getColor()
    {
        echo "黄色人种的皮肤是黄色的" . "\n";
    }

    public function talk()
    {
        echo "黄色人种会说话，说的最多的是中文" . "\n";
    }

}