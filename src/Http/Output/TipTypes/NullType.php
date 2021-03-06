<?php

namespace Addons\Core\Http\Output\TipTypes;

use Addons\Core\Contracts\Http\Output\TipType;

class NullType extends TipType {

	protected $type = 'null';
	
	public function getTimeout()
	{
		return $this->timeout;
	}

	public function toArray()
	{
		return false;
	}

	public function jsonSerialize()
	{
		return $this->toArray();
	}

}