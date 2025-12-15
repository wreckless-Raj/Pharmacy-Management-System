<html>
    <head>
    	 
    	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>


<?php

	$address = $_GET["ADDRESS"];

	$road_number = $_GET["ROAD_NUMBER"];

	$city= $_GET["CITY"];

	$quantity= $_GET["QUANTITY"];

	$amount= $_GET["AMOUNT"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO order_details VALUES ( NULL, '$address', '$road_number', '$city', '$quantity', '$amount' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Address = $address <br> Road_Number = $road_number <br> City = $city <br> Quantity = $quantity <br> Amount = $amount";



	echo "<p><a href=read.php><button class= 'ui primary button'>READ all records</button></a></p>";

?>