<?php

namespace YahaayLabs\Alternator;

class Alternator {

	private $strMessage = "";
	
	public function __construct($strMessage = null)
	{
		$this->strMessage = $strMessage . 'from Alternator';
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