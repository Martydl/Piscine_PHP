<?php
function ft_split($split)
{
	$split = trim($split);
	$split = explode(" ", $split);
	$split = array_filter($split);
	return ($split);
}
?>