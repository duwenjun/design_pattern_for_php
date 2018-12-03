<?php

abstract class Command
{
    protected $requirementGroup;

    protected $pageGroup;

    protected $codeGroup;

    public function __construct()
    {
        $this->requirementGroup = new RequirementGroup();
        $this->pageGroup = new PageGroup();
        $this->codeGroup = new CodeGroup();
    }

    abstract public function execute();

}