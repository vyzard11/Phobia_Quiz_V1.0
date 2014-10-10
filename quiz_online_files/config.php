<?php
	$host = "catalyst.esy.es";
	$user = "u449078775_user";
	$pass = "Shov2014!";
	$db = "u449078775_db";
	$conn = @mysqli_connect ($host,$user,$pass,$db) OR die ('Could not connect to
	MySQL: ' . mysqli_connect_error( ) );
?>