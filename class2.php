<?php 


namespace App\Papa2;
use App\Papa\ClassName as Mem;

/**
 * 
 */
class ClassName2 
{
	public $obj;
	
	function __construct(Mem $var)
	{
		$this->obj = $var;
	}


	function test() {
		$this->obj->get();
	}
}