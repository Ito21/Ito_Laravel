<?php

// string / integer /array / boolean / NULL
$str = '文字列';
$int = 3;
$array = ['リンゴ', 'オレンジ'];
$array2 = [
	'リンゴ' => '赤',
	'オレンジ' => '橙'
];
$bool = TRUE;
$null = NULL;

echo gettype($str) . PHP_EOL;
echo gettype($int) . PHP_EOL;
echo gettype($array) . PHP_EOL;
echo gettype($array2) . PHP_EOL;
echo gettype($bool) . PHP_EOL;
echo gettype($null) . PHP_EOL;
