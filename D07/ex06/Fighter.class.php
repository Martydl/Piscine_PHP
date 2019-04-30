<?php

abstract class fighter {

	public $type;

	function __construct($name)
	{
		$this->type = $name;
	}

	abstract function fight($target);
}

?>
