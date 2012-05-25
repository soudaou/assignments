<?php
$errors = array();

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$lang = filter_input(INPUT_POST, 'lang', FILTER_SANITIZE_STRING);
$notes = filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);

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
	if (empty($username)) {
		$errors['username'] = true;
	}
	
//to validate the radio
if ($lang != 'spanish' || $lang != 'french' || $lang != 'english'){
		$errors['lang'] = true;
	}
	
//to validate the message
	if (mb_strlen($notes) < 5 || mb_strlen($notes) > 100 ){
		$errors['notes'] = true;
	}
	
//to validate the terms
	if (!isset($_POST['terms'])){
		$errors['terms'] = true;
	}
}