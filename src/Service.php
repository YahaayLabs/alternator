<?php

namespace YahaayLabs\Alternator;

class Service {

	private $strMessage = "";
	
	public function __construct($strMessage = null)
	{
		$this->strMessage = $strMessage . 'from Service';
	}

	public function getMessage()
	{
		return $this->strMessage;
	}

	public function setMessage($strMessage = null)
	{
		$this->strMessage = $strMessage;
	}
}