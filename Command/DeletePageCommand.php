<?php

class DeletePageCommand extends Command
{
    public function execute()
    {
        // 找到页面组
        $this->pageGroup->find();

        // 删除一个页面
        $this->pageGroup->delete();

        // 给出计划
        $this->pageGroup->plan();

    }
}