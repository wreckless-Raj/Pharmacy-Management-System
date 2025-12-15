<?php

	$name = $_GET["NAME"];

	$salary = $_GET["SALARY"];

	$shift= $_GET["SHIFT"];

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO employees VALUES ( NULL, '$name', $salary, '$shift' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Name = $name <br> Salary = $salary<br> Shift = $shift";



	echo "<p><a href=read.php>READ all records</a>";

?>