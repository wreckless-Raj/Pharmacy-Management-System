<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$salary = $_GET["salary"];

	$shift = $_GET["shift"];
	
	

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Name: <input type=text name="name" value='<?php echo $name; ?>'>

	<p>

	Salary: <input type=text name="salary" value='<?php echo $salary; ?>'>

	Shift: <input type=text name="shift" value='<?php echo $shift; ?>'>

	<p>

	<input type=submit value=Update>

</form>