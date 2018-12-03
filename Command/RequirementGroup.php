<?php

class RequirementGroup extends Group
{
    public function find()
    {
        echo "找到需求组..." . "\n";
    }

    public function add()
    {
        echo "客户要求添加一项需求..." . "\n";
    }

    public function change()
    {
        echo "客户要求修改一项需求..." . "\n";
    }

    public function delete()
    {
        echo "客户要求删除一项需求..." . "\n";
    }

    public function plan()
    {
        echo "客户要求需求变更计划..." . "\n";
    }

}