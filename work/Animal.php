<?php

class Animal {
	//Animalクラスに1つクラス変数(プロパティ)$cryを追加し、「bowbow!」という文字列を代入してください。
	private $cry = 'bowbow!';

	//Animalクラスで鳴く(bow)というクラス関数を作成してください。
	public function bow()
	{
		//関数内に「bowbow!」という文字を出力する処理を追加してください。
		echo $this->cry . PHP_EOL;
	}
}

$animal = new Animal();
$animal->bow();

class Dog extends Animal {
	public $cry = "わんわん!";

	function bow() {
		echo $this->cry . PHP_EOL;
	}
}

$animal = new Dog();
$animal->bow();

class Cat extends Animal {
	public $cry = "にゃーにゃー!";

	function bow() {
		echo $this->cry . PHP_EOL;
	}
}
//Animalクラスをインスタンス化し、鳴く(bow)関数を実行してください。
$animal = new Cat();

$animal->bow();
