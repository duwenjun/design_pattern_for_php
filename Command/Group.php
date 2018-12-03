<?php

abstract class Group
{
    abstract public function find();

    abstract public function add();

    abstract public function delete();

    abstract public function change();

    abstract public function plan();

}