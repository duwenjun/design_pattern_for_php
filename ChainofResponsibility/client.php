<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

    public function __construct(){
        $sh = new SHDnsServer();
        $china = new ChinaTopDnsServer();
        $top = new TopDnsServer();

        $china->setUpperServer($top);
        $sh->setUpperServer($china);

        echo "-----域名解析模拟器-------" . "\n";

        $domain_list = ['www.xxx.sh.cn', 'www.com.cn', 'www.com'];
        shuffle($domain_list);
        $domain = array_pop($domain_list);
        $recorder = $sh->resolve($domain);

        echo "------DNS服务器解析结果-----" . "\n";

        echo $recorder;

    }
}

$worker = new client();