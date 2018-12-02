<?php

interface IGamePlayer
{
    public function login($user, $password);

    public function killBoss();

    public function upgrade();

}