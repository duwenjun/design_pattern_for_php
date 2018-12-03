<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        $school_report = new FouthGradeSchoolReport();
        $school_report = new HighScoreDecorator($school_report);
        $school_report = new SortDecorator($school_report);

        $school_report->report();
        $school_report->sign('Dave');
    }
}

$worker = new client();