<?php
function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp);
	if ($tab == $tmp)
		return(1);
	else
		return (0);
}
?>