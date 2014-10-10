<?php
	$host = "localhost";
	$user = "gcccsorg_phobia";
	$pass = "Pa$$word10";
	$db = "gcccsorg_phobia ";
	$conn = @mysqli_connect ($host,$user,$pass,$db) OR die ('Could not connect to
	MySQL: ' . mysqli_connect_error( ) );
?>