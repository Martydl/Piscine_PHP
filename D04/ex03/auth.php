<?php
function auth ($login, $passwd)
{
	$tab = unserialize(file_get_contents("../private/passwd"));
	foreach ($tab as $elem)
	{
		if ($elem[login] == $login)
			if (hash(whirlpool, $passwd) == $elem[passwd])
				return(TRUE);
			else
				break ;
	}
	return (FALSE);
}
?>
