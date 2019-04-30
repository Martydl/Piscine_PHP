<?php

class UnholyFactory {

	static $soldiers = array();

	function absorb($unit)
	{
		if ($unit->type === "foot soldier" || $unit->type === "archer" || $unit->type === "assassin")
		{
			foreach (self::$soldiers as $soldier)
				if ($soldier->type === $unit->type)
				{
					$dup = 1;
					break ;
				}
			if ($dup === 1)
				echo "(Factory already absorbed a fighter of type " . $unit->type . ")\n";
			else
			{
				self::$soldiers[] = $unit;
				echo "(Factory absorbed a fighter of type " . $unit->type . ")\n";
			}
		}
		else
			echo "(Factory can't absorb this, it's not a fighter)\n";
	}

	function fabricate($unit)
	{
		foreach (self::$soldiers as $soldier)
			if ($soldier->type === $unit)
			{
				echo "(Factory fabricates a fighter of type " . $unit . ")\n";
				return ($soldier);
			}
		echo "(Factory hasn't absorbed any fighter of type " . $unit . ")\n";
	}
}

?>
