<?php
class Author extends Person{

	protected $penName="Hero";

	public function openPenName(){

		return $this->penName.PHB_EOL;
	}

	public function getCompleteName(){
		//echo "Person full name in author ".PHP_EOL;
		return $this->firstname." ".$this->lastname."".$this->penName.PHP_EOL;
	}

}
?>

