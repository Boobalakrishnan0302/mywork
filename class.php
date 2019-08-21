<?php

class Person{

	const AVG_LIFE_SPAN=79;

	protected $firstname;
	protected $lastname;
	protected $yearborn;

	function __construct($tempF="",$tempL="",$year=""){

		echo "PersonConstructor ".PHP_EOL;

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

$newAuthor = new Author("Boobal","Krishnan","1994");

 echo $newAuthor->getCompleteName();

// $myObject= new Person("Boobalalkrishnan","Kumaravel",1994);

// $myObject->setFirstName("Boobal");

// echo $myObject->lastname."\n";

// echo "Using Get Method "."".$myObject->getFirstName();


// echo $myObject->firstname."\n";

// $myObject->firstname="KBK";

// echo $myObject->firstname."\n";

// echo $myObject::AVG_LIFE_SPAN."\n";

// echo Person::AVG_LIFE_SPAN;

?>