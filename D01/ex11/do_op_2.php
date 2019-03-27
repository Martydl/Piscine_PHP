#!/usr/bin/php
<?php

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
	return($str);
}

function div($tab, $op)
{
	$tab = implode($tab);
	$tab = explode($op, $tab);
	return ($tab);
}

function getop($tab)
{
	foreach ($tab as $elem)
		if ($elem == '+' || $elem == '-' || $elem == '*' || $elem == '/' || $elem == '%')
			return ($elem);
}

function op ($tab, $op)
{
	if ($op == '+')
		return ($tab[0] + $tab[1]);
	if ($op == '-')
		return ($tab[0] - $tab[1]);
	if ($op == '*')
		return ($tab[0] * $tab[1]);
	if ($op == '/')
	return ($tab[0] / $tab[1]);
	if ($op == '%')
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
		echo "Syntax Error";
}
else
	echo "Incorrect Parameters";
?>