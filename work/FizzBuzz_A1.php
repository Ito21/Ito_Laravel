<?php

//1から100までの数字を出力するプログラムを書いてください。
for ($i = 1; $i <= 100; $i++) {
	//3の倍数のときは数の代わりに「Fizz」、5の倍数のときは「Fizz」と出力し、3と5両方の倍数の場合は「FizzBuzz」と出力してください。
	if ($i % 15 === 0) {
		echo 'FizzBuzz' . PHP_EOL;
	} elseif ($i % 3 === 0) {
		echo 'Fizz' . PHP_EOL;
	} elseif ($i % 5 === 0) {
		echo 'Buzz' . PHP_EOL;
	} else {
		echo $i . PHP_EOL;
	}
}
