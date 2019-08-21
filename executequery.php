<?php
// echo phpinfo();exit;
// $dpPassword="vVIpTipyYBaQ2k8R";
$dpPassword="";
$dpUserName="root";
$dpServer="localhost";
$dpName="phpfundamentals";

$connection= mysqli_connect($dpServer,$dpUserName,$dpPassword,$dpName);
// print_r($connection);

if($connection->connect_errno){
	exit("Database connection failed Reason : ".$connection->connect_error);
}

// $query=" Delete from Authors where id=2";

// $query="UPDATE Authors SET pen_Name='K.B.K' where id = 1";

// $query="INSERT Into Authors (first_name,last_name,pen_name) Values('Karthi','Keyan','KK')";

$tempFirstName="Karthi";

$query="SELECT first_name,last_name,pen_name from Authors WHERE first_name = ?";

	$statementObj=$connection->prepare($query);

	$statementObj->bind_param("s",$tempFirstName);
	$statementObj->execute();

	$statementObj->bind_result($first_name,$last_name,$pen_name);
	$statementObj->store_result();

	if($statementObj->num_rows>0){
		while($statementObj->fetch()){
			echo $first_name ."".$last_name."" .$pen_name;
		}
	}



// $resultObj = $connection->query($query);

// print_r($resultObj) ;

// if($resultObj->num_rows>0){

// 	while($singleRowFromQuery=$resultObj->fetch_assoc()){

// 		print_r($singleRowFromQuery);


// 	}
// }

// echo "Newly created id".$connection->insert_id;

$connection->close();

?>
