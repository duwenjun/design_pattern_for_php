<?php

class PageGroup extends Group
{

    public function find()
    {
        echo "找到美工组..." . "\n";
    }

    public function add()
    {
        echo "客户要求添加一个页面..." . "\n";
    }

    public function change()
    {
        echo "客户要求修改一个页面..." . "\n";
    }

    public function delete()
    {
        echo "客户要求删除一个页面..." . "\n";
    }

    public function plan()
    {
        echo "客户要求页面变更计划..." . "\n";
    }

}