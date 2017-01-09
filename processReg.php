<?php
	$username = $email = $password = "";

	if($_SERVER["REQUST_METHOD"] == "POST"){
		$name = $_POST["name"];
		$email = $_POST["email"];
		$password = $_POST["pwd"];
	}

?>