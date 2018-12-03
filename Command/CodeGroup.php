<?php


class CodeGroup extends Group
{
    public function find()
    {
        echo "找到d代码组..." . "\n";
    }

    public function add()
    {
        echo "客户要求添加一项功能..." . "\n";
    }

    public function change()
    {
        echo "客户要求修改一项功能..." . "\n";
    }

    public function delete()
    {
        echo "客户要求删除一项功能..." . "\n";
    }

    public function plan()
    {
        echo "客户要求代码变更计划..." . "\n";
    }

}