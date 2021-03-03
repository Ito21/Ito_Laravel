<?php
$numbers = array();
//1から100までの数字を出力するプログラムを書いてください。
for ($i = 1; $i <= 100; $i++) {
	//3の倍数のときは数の代わりに「Fizz」、5の倍数のときは「Fizz」と出力し、3と5両方の倍数の場合は「FizzBuzz」と出力してください。
	array_push($numbers, $i);
}
foreach ($numbers as $ia) {
	$str = '';
	if ($ia % 3 === 0) {
		$str .= 'Fizz';
	}
	if ($ia % 5 === 0) {
		$str .= 'Buzz';
	}
	if ($str === '') {
		$str .= $ia;
	}
	echo $str . PHP_EOL;
}

