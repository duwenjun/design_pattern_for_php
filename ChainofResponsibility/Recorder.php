<?php

class Recorder
{
    private $domain;

    private $ip;

    private $owner;


    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function getDomain()
    {
        return $this->domain;
    }

    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    public function setOwner($owner){
        $this->owner = $owner;
    }

    public function getOwner()
    {
        return $this->owner;
    }

    public function __toString()
    {
        $str = '域名：' . $this->domain . "\n";
        $str .= "Ip地址：" . $this->ip . "\n";
        $str .= "解析者：" . $this->owner . "\n";
        return $str;
    }

}