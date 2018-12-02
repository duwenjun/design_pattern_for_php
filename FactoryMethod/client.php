<?php

ini_set('display_errors', true);
error_reporting(E_ALL);
include('../autoload.php');


class client {

	public function __construct(){
		$HumanFactory = new HumanFactory();
		$black = $HumanFactory->createHuman(HumanFactory::BLACK_HUMAN);
        $black->getColor();
        $black->talk();

        $yellow = $HumanFactory->createHuman(HumanFactory::YELLOW_HUMAN);
        $yellow->getColor();
        $yellow->talk();

        $white = $HumanFactory->createHuman(HumanFactory::WHITE_HUMAN);
        $white->getColor();
        $white->talk();
	}
}

$worker = new client();