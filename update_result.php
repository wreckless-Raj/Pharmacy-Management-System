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




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE order_details SET address='$address', road_number='$road_number', city='$city', quantity='$quantity', amount='$amount'  WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Address = $address <br> Road_Number = $road_number <br> City = $city <br> Quantity = $quantity <br> Amount = $amount";



	echo "<p><a href=read.php><button class= 'ui primary button'>READ all records</button></a></p>";

?>