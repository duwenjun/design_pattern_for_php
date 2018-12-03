<?php

class FouthGradeSchoolReport extends SchoolReport
{
    public function report()
    {
        $str = '尊敬的xxx家长：' . "\n";
        $str .= '........' . "\n";
        $str .= '语文62 数学65 体育98 自然63' . "\n";
        $str .= '........' . "\n";
        $str .= '     家长签名：     ' . "\n";
        echo $str;
    }

    public function sign($name)
    {
        echo "家长签名：" . $name . "\n";
    }
}