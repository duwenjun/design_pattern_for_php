<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('../autoload.php');

class client {

	//用于实例化
	private $fly1;
	private $fly2;

	//用于克隆
	private $c1Fly;
	private $c2Fly;
	private $updatedCloneFly;

	public function __construct(){

		//实例化
		$this->fly1 = new MaleProto();
		$this->fly2 = new FemaleProto();

		//克隆
		$this->c1Fly = clone $this->fly1;
		$this->c2Fly = clone $this->fly2;
		$this->updatedCloneFly = clone $this->fly2;

		//更新克隆
		$this->c1Fly->mated = 'true';
		$this->c2Fly->fecundity = '186';
		$this->updatedCloneFly->eyeColor = 'purple';
		$this->updatedCloneFly->wingBeat = '220';
		$this->updatedCloneFly->unitEyes = '750';
		$this->updatedCloneFly->fecundity = '92';

		//通过类型提示方法发送
		$this->showFly($this->c1Fly);
		$this->showFly($this->c2Fly);
		$this->showFly($this->updatedCloneFly);
	}

	private function showFly(IPrototype $fly){
		echo 'Eye color:' . $fly->eyeColor . "\n";
		echo 'Wing Beats/second:' . $fly->wingBeat . "\n";
		echo 'Eye units:' . $fly->unitEyes . "\n";
		$genderNow = $fly::gender;
		echo 'Gender:' . $genderNow . "\n";
		if ($genderNow == 'FEMALE') {
			echo 'Number of eggs:' . $fly->fecundity . "\n";
		} else {
			echo 'Mated:' . $fly->mated . "\n";
		}
	}
}

$worker = new client();