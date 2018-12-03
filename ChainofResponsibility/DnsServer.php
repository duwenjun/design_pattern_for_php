<?php

abstract class DnsServer
{
    private $upperServer;

    public function resolve($domain)
    {
        $recorder = null;
        if ($this->isLocal($domain)){
            $recorder = $this->getRecorder($domain);
        } else {
            $recorder = $this->upperServer->resolve($domain);
        }
        return $recorder;
    }

    public function setUpperServer(DnsServer $upperServer)
    {
        $this->upperServer = $upperServer;
    }

    protected abstract function isLocal($domain);

    protected function getRecorder($domain)
    {
        $recorder = new Recorder();

        $recorder->setIp($this->getIpAddress());
        $recorder->setDomain($domain);
        return $recorder;
    }

    private function getIpAddress()
    {
        $address = mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "."  .mt_rand(0, 255);
        return $address;
    }

}