<html>
<body>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		Name : <input type="text" name="fname">
		<input type="submit">
	</form>

	<?php
	if($_SERVER["REQUEST_METHOD"]=="POST") {

		$name= htmlspecialchars($_REQUEST['fme']);
	if(empty($name)){
			echo "name is empty";

		}
		else{

			echo $name;
		}
	}
	?>
</body>
</html>
