<?php 
class SimpleClass{
	private $field = null;
	private $bar = 11;
	private $foo = 10;
	public function getField(){
		return $this->field;
	}
	public function setField($field){
		$this->field = $field;
	}
}
