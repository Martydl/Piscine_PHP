#!/usr/bin/php
<?php

function convert($tab)
{
	foreach ($tab as $elem)
	{
		$split = explode(":", $elem);
		$ret[$split[0]] = $split[1];
	}
	return ($ret);
}

$key = $argv[1];
array_splice($argv, 0, 2);
$tab = convert($argv);
if ($tab[$key])
	echo "$tab[$key]\n";
?>