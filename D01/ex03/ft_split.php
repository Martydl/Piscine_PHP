<?php

function filter($str)
{
	$str = str_split($str);
	if ((!is_numeric($str[0]) && !$str[0]))
		return (0);
	return (1);
}

function ft_split($split)
{
	$split = trim($split);
	$split = explode(" ", $split);
	$split = array_filter($split, "filter");
	sort($split);
	return ($split);
}
?>