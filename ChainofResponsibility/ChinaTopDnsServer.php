<?php

class ChinaTopDnsServer extends DnsServer
{
    protected function getRecorder($domain)
    {
        $recorder = parent::getRecorder($domain);
        $recorder->setOwner('中国顶级DNS服务器');
        return $recorder;
    }

    protected function isLocal($domain)
    {
        $domain_pieces = explode('.', $domain);
        return $domain_pieces[count($domain_pieces) - 1] == 'cn';
    }

}