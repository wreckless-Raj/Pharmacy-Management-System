<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$location = $_GET["location"];

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br>



	Name: <input type=text name="name" value='<?php echo $name; ?>'>

	<p>

	Location: <input type=text name="location" value='<?php echo $location; ?>'>

	<p>

	<input type=submit value=Update>

</form>