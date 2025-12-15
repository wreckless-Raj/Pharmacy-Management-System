<html>
    <head>
    	 
    	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    
    <body>
       

<?php

	$id = $_GET["id"];

	$address = $_GET["address"];

	$road_number = $_GET["road_number"];

	$city = $_GET["city"];

	$quantity = $_GET["quantity"];

	$amount = $_GET["amount"];
	
	

?>



<h1>Update Record</h1>



<form method=get action=update_result.php>



	<input type=hidden name=id value='<?php echo $id; ?>'> <br> <br>



	Address: <input type=text name="address" value='<?php echo $address; ?>'> <br> <br>

	<p>

	Road_Number: <input type=text name="road_number" value='<?php echo $road_number; ?>'> <br> <br>

	City: <input type=text name="city" value='<?php echo $city; ?>'> <br>

	<p>

	Quantity: <input type=text name="quantity" value='<?php echo $quantity; ?>'> <br>

	<p>

	Amount: <input type=text name="amount" value='<?php echo $amount; ?>'>	<br> <br>

	<p>

	<input type=submit value=Update>

</form>