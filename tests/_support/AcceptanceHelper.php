<?php
class AcceptanceHelper{

	public function seeContentIsLong($content,$trigger_length=100){
		$this->assertGreaterThen($trigger_length,strlen($content));
	}
}