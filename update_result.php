<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$location = $_GET["location"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE pharmacy SET name='$name', location='$location' WHERE id = '$id'";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $name <br> Location = $location </p>";



	echo "<p><a href=read.php>READ all records</a></p>";

?>