<?php

$thanks = false;
$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$preferredlang = filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
$souad = 'Souad Daou';
$myemail = 'daou0092@algonquinlive.com';
$subject = 'Registration form';
$message = 'Thank you for registering';

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

//to validate the username
	if (strlen($username) < 1 || strlen($username) > 25)
    	$errors['username'] = true;
	
//to validate the password
	if (empty($password)) {
   	 	$errors['password'] = true;
	}
		
//to validate the language
	if (!in_array($preferredlang, array('english', 'french', 'spanish')))
   		$errors['preferredlang'] = true;
	
//to validate the terms
	if (!isset($_POST['terms'])){
		$errors['terms'] = true;
	}
	
//to validate the message


if (empty($errors)){
	$thanks = true;
	$headers = 'From: ' . $souad . '<' . $email . '>';
	mail('souaddaou@gmail.com', $subject, $message, $headers);
	}
}