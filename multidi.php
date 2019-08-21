<?php

// $authors= array("Male","Female");
// print_r($authors);
 
// //ho($authors);

// $authors= array(

// 	"Male"=> array("Boobal","Karthi","Dharshan"),
// 	"female" => array("swathi","abinaya","Gita")

// 	);
// print_r($authors);


$authors= array(

	"Male"=> array("Boobal"=> array("life","happiness","enjoyment"),
					"Karthi"=>array("love","syndar","hola"),
					"Dharsan"=>array("a","b","c")),
	"female" => array("swathi"=> array("gh","qw","er"),
					"abinaya"=>array("fg","hj","jk"),
					"Gita"=> array("dfg","dgggt","thth"))

	);
print_r($authors["Male"]["Boobal"][2]);


?>