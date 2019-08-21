<html>
<body>

	<?php 

	//global scope

	$x=5;

	function myTest() {

		echo "<p> variable x inside the function:$x </p>";

	}

	myTest();

	echo "<p> variable x outside the function : $x </p>";
	?>


	<?php 

	//local scope


	function myTest1() {

	$x=5;

		echo "<p> variable x inside the function:$x </p>";

	}

	myTest1();

	echo "<p> variable x outside the function : $x </p>";
	?>




</body>
</html>
