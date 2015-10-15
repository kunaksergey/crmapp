<?php
namespace app\models;

class Phone {
	public $number;

	public function __construct($number){
		$this->number=$number;
	}
	
}