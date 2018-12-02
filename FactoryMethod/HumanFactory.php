<?php


class HumanFactory extends AbstractHumanFactory
{

    const BLACK_HUMAN = 1;
    const YELLOW_HUMAN = 2;
    const WHITE_HUMAN = 3;

    public function createHuman($human_type)
    {
        $human = null;
        switch ($human_type){
            case self::BLACK_HUMAN:
                $human = new BlackHuman();
                break;
            case self::YELLOW_HUMAN:
                $human = new YellowHuman();
                break;
            case self::WHITE_HUMAN:
                $human = new WhiteHuman();
                break;
        }
        return $human;
    }

}