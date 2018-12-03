<?php

class HighScoreDecorator extends Decorator
{

    public function __construct(SchoolReport $schoolReport)
    {
        parent::__construct($schoolReport);
    }

    public function report()
    {
        $this->reportHighScore();
        parent::report();
    }

    private function reportHighScore()
    {
        echo "这次考试语文最高分75，数学78，自然80" . "\n";
    }

}