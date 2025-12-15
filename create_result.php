<?php

	$name = $_GET["NAME"];

	$location = $_GET["LOCATION"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO pharmacy VALUES ( NULL, '$name', '$location' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Name = $name <br> Location = $location";



	echo "<p><a href=read.php>READ all records</a>";

?>