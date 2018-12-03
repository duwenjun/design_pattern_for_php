<?php

class GivenGreenLight implements IStrategy
{

    public function operate()
    {
        echo "求吴国太开绿灯，放行！" . "\n";
    }

}