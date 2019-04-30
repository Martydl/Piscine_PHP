<?php

class NightsWatch{

	static $figthers = array();

	function recruit($name) {
		self::$figthers[] = $name;
	}

	function fight(){
		foreach(self::$figthers as $elem) {
			if (is_callable(array($elem, 'fight')))
				$elem->fight();
		}
	}
}


?>
