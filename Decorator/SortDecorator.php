<?php

class SortDecorator extends Decorator
{

    public function __construct(SchoolReport $schoolReport)
    {
        parent::__construct($schoolReport);
    }

    public function report()
    {
        parent::report();
        $this->reportSort();
    }

    private function reportSort()
    {
        echo "我的排名是38名" . "\n";
    }

}