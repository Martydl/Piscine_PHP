<?php
if (!file_exists("../private/passwd"))
	exit ("ERROR\n");
if($_POST['submit'] == "OK")
{
	$tab = unserialize(file_get_contents("../private/passwd"));
	foreach($tab as &$elem)
	{
		if ($elem['login'] == $_POST['login'])
		{
			if (hash(whirlpool, $_POST['oldpw']) == $elem['passwd'])
			{
				if ($_POST['newpw'] != "")
				{
					$elem['passwd'] = hash(whirlpool, $_POST['newpw']);
					file_put_contents("../private/passwd", serialize($tab));
					exit ("OK\n");
				}
				else
					break ;
			}
			else
				break ;
		}
	}
}
exit ("ERROR\n");
?>
