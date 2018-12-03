<?php

abstract class Decorator extends SchoolReport
{
    private $schoolReport;

    public function __construct(SchoolReport $schoolReport)
    {
        $this->schoolReport = $schoolReport;
    }

    public function report()
    {
        $this->schoolReport->report();
    }

    public function sign($name)
    {
        $this->schoolReport->sign($name);
    }

}