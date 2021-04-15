<form method="POST"> 
	<input type="text" name="number1">
	<input type="text" name="number2">
	<input type="submit" name="calculate" value="Calcula Soma">

</form>

<?php 
	require_once "functions/functions.php";
	if (isset($_POST["calculate"])) {
		$a = $_POST["number1"];
		$b = $_POST["number2"];
		$c = some_git($a,$b);
		echo $c;
	}



 ?>