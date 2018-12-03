<?php

class SHDnsServer extends DnsServer
{

    protected function getRecorder($domain)
    {
        $recorder = parent::getRecorder($domain);
        $recorder->setOwner('上海DNS服务器');
        return $recorder;
    }

    protected function isLocal($domain)
    {
        $domain_pieces = explode('.', $domain);
        $with_cn = $domain_pieces[count($domain_pieces) - 1] == 'cn';
        $with_sh = $domain_pieces[count($domain_pieces) - 2] == 'sh';
        return $with_cn && $with_sh;
    }

}