<?php

class TopDnsServer extends DnsServer
{
    protected function getRecorder($domain)
    {
        $recorder = parent::getRecorder($domain);
        $recorder->setOwner('全球顶级DNS服务器');
        return $recorder;
    }

    protected function isLocal($domain)
    {
        return true;
    }
}