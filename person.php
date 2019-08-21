<?php

class Person{

	const AVG_LIFE_SPAN=79;

	protected $firstname;
	protected $lastname;
	protected $yearborn;

	function __construct($tempF="",$tempL="",$year=""){

		echo "PersonConstructor with include keyword s ".PHP_EOL;

		$this->firstname=$tempF;

		$this->lastname=$tempL;
		$this->yearborn=$year;

	}


	public function getFirstName(){

		return $this->firstname;

	}

	public function setFirstName($tempName){

		$this->firstname=$tempName;


	}

	protected function getFullname(){
		//echo "Person full name".PHP_EOL;
		return $this->firstname." ".$this->lastname.PHP_EOL;
	}


}

?>