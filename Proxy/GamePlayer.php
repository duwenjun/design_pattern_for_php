<?php


class GamePlayer implements IGamePlayer
{

    private $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function killBoss()
    {
        echo $this->name . "在打怪!" . "\n";
    }

    public function login($user, $password)
    {
        echo "登录名为:" . $user . "的用户" . $this->name . "登录成功！" . "\n";
    }

    public function upgrade()
    {
        echo $this->name . "又升了一级" . "\n";
    }

}