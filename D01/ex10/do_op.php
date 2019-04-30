#!/usr/bin/php
<?php

function num($char)
{
	if (is_numeric($char) || $char == '+' || $char == '-')
		return (1);
	return (0);
}

function format($num)
{
	$num = str_split($num);
	foreach ($num as &$char)
		if (!is_numeric($char) && $char != '+' && $char != '-')
			$char = '';
	$num = array_filter($num, "num");
	$num = implode($num);
	return ($num);
}

function op($num1, $op, $num2)
{
	if ($op == '+')
	return ($num1 + $num2);
	if ($op == '-')
	return ($num1 - $num2);
	if ($op == '*')
	return ($num1 * $num2);
	if ($op == '/')
	return ($num1 / $num2);
	if ($op == '%')
	return ($num1 % $num2);
}

if ($argc == 4)
{
	$op = $argv[2];
	$num1 = $argv[1];
	$num2 = $argv[3];
	$op = str_split($op);
	foreach ($op as &$char)
		if ($char != '+' && $char != '-' && $char != '*' && $char != '/' && $char != '%')
			$char = '';
	$op = array_filter($op);
	$op = implode($op);
	$num1 = format($num1);
	$num2 = format($num2);
	$res = op($num1, $op, $num2);
	echo "$res\n";
}
else
	echo "Incorrect Parameters\n";
?>