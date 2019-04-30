#!/usr/bin/php
<?php
if ($argc == 2)
{
	$i = 0;
	$i_num = 0;

	while ($argv[1][$i] && $argv[1][$i] == " ")
		$i++;
	if ($argv[1][$i] == "+" || $argv[1][$i] == "-")
		$num1[$i_num++] = $argv[1][$i++];
	while (is_numeric($argv[1][$i]))
		$num1[$i_num++] = $argv[1][$i++];
	if ($num1[0] || is_numeric($num1))
	$num1 = implode("", $num1);

	while ($argv[1][$i] && $argv[1][$i] == " ")
		$i++;
	if ($argv[1][$i] == '+' || $argv[1][$i] == '-' || $argv[1][$i] == '*' || $argv[1][$i] == '/' || $argv[1][$i] == '%')
		$op[0] = $argv[1][$i++];

	$i_num = 0;
	while ($argv[1][$i] && $argv[1][$i] == " ")
		$i++;
	if ($argv[1][$i] == "+" || $argv[1][$i] == "-")
		$num2[$i_num++] = $argv[1][$i++];
	while (is_numeric($argv[1][$i]))
		$num2[$i_num++] = $argv[1][$i++];
	if ($num2[0] || is_numeric($num2))
		$num2 = implode($num2);

	while ($argv[1][$i] && $argv[1][$i] == " ")
		$i++;

	if (!is_numeric($num1) || !is_numeric($num2) || empty($op) || $argv[1][$i])
		echo "Syntax Error\n";
	else
	{
		if ($op[0] == '+')
			echo $num1 + $num2;
		if ($op[0] == '-')
			echo $num1 - $num2;
		if ($op[0] == '*')
			echo $num1 * $num2;
		if ($op[0] == '/')
			echo $num1 / $num2;
		if ($op[0] == '%')
			echo $num1 % $num2;
		echo "\n";
	}
}
else
	echo "Incorrect Parameters\n";
?>