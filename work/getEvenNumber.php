<?php

//if文を用いて、任意で入力する数字が偶数か奇数か出力してください。
$input_number = $argv[1];

if ($input_number % 2 === 0) {
	echo $input_number . 'は偶数です。' . PHP_EOL;
} else {
	echo $input_number . 'は奇数です。' . PHP_EOL;
}
