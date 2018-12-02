<?php

ini_set('display_errors', true);
error_reporting(E_ALL);
include('../autoload.php');


class client {

    public function __construct(){
        echo "开始时间是：" . date('Y-M-D H:i:s') . "\n";

        $player = new GamePlayer('张三');
        $proxy = new GamePlayerProxy($player);
        $proxy->login('zhangsan', 'password');
        $proxy->killBoss();
        $proxy->upgrade();

        echo "结束时间是：" . date('Y-M-D H:i:s') . "\n";

    }
}

$worker = new client();