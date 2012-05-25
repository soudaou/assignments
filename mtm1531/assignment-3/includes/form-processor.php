<?php
$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


/*Validation*/

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//to validate the name
	if (empty($name)) {
		$errors['name'] = true;
	}
//to validate the email
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = true;
	}




}