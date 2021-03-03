<?php
    require('input.php');

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