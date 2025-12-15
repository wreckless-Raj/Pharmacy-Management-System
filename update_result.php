<?php

	$id = $_GET["id"];

	$name = $_GET["name"];

	$salary = $_GET["salary"];

	$shift = $_GET["shift"];




	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE employees SET name='$name', salary='$salary', shift='$shift'  WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> Name = $name <br> Salary = $salary <br> Shift = $shift";



	echo "<p><a href=read.php>READ all records</a>";

?>