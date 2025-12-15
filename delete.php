<html>
    <head>
    	 
    	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    
    <body>
       

<?php

	$id = $_GET["id"];
	


	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM order_details WHERE ID=$id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read.php><button class= 'ui primary button'>READ all records</button></a></p>";

?>