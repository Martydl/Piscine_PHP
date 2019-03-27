#!/usr/bin/php
<?php

function num($char)
{
	if (is_numeric($char) || $char == '+' || $char == '-' || $char == '*' || $char == '/' || $char == '%')
		return (1);
	return (0);
}

function format($str)
{
	$str = str_split($str);
	foreach($str as &$char)
	{
		if (!is_numeric("$char") && $char != ' ' && $char != '+' && $char != '-' && $char != '*' && $char != '/' && $char != '%')
			return (null);
		if ($char == ' ')
			$char = '';
	}
	$str = array_filter($str, "num");
	$str = array_values($str);
	return($str);
}

function getop($tab)
{
	$i = 0 ;
	foreach($tab as $elem)
		if ($i++ != 0 && ($elem === "+" || $elem === "-" || $elem === "*" || $elem === "/" || $elem === "%"))
		{
			$op[0] = $elem;
			$op[1] = $i;
			return ($op);
		}
}

function div($tab, $op)
{
	$tab = implode($tab);
	$ret[0] = substr($tab, 0, $op[1] - 1);
	$ret[1] = substr($tab, $op[1]);
	return ($ret);
}

function op ($tab, $op)
{
	if ($op[0] == '+')
		return ($tab[0] + $tab[1]);
	if ($op[0] == '-')
		return ($tab[0] - $tab[1]);
	if ($op[0] == '*')
		return ($tab[0] * $tab[1]);
	if ($op[0] == '/')
	return ($tab[0] / $tab[1]);
	if ($op[0] == '%')
	return ($tab[0] % $tab[1]);
}

if ($argc == 2)
{
	if ($argv[1] = format($argv[1]))
	{
		$op = getop($argv[1]);
		$tab = div($argv[1], $op);
		$res = op($tab, $op);
		echo "$res\n";
	}
	else
		echo "Syntax Error\n";
}
else
	echo "Incorrect Parameters\n";
?>