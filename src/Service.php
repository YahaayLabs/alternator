<?php

namespace YahaayLabs\Alternator;

class Service {

	private $strMessage = "";
	
	public function __construct($strMessage = null)
	{
		$this->strMessage = $strMessage;
	}

	public static function getMessage()
	{
		return $this->strMessage;
	}
}