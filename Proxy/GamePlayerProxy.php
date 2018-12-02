<?php


class GamePlayerProxy implements IGamePlayer
{

    private $player = null;

    public function __construct(IGamePlayer $player)
    {
        echo "我是代理" . "\n";
        $this->player = $player;
    }

    public function killBoss()
    {
        $this->player->killBoss();
    }

    public function login($user, $password)
    {
        $this->player->login($user, $password);
    }

    public function upgrade()
    {
        $this->player->upgrade();
    }

}