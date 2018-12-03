<?php

class AddRequirementCommand extends Command
{
    public function execute()
    {
        // 找到需求组
        $this->requirementGroup->find();

        // 添加需求
        $this->requirementGroup->add();

        // 给出计划
        $this->requirementGroup->plan();

    }
}