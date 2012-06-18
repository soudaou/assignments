<?php
require_once 'includes/users.php';
require_once 'includes/db.php';

$error = array();

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);

if ($_SERVER['REQUEST_METHOD'] =='POST') {
	if (empty($username)) {
		$errors['username'] = true;
	}
	if (empty($password)) {
		$errors['password'] = true;
	}
	if (empty($errors)) {
		
	}
}

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign In</title>
</head>

<body>

	<form method="post" actions="sign-in.php">
		<div>
			<label for="username">Username</label>
			<input id="username" name="username" required>
		</div>
		
		<div>
			<label for="password">Password</label>
			<input id="password" name="password" required>
		</div>
		
		<button type="submit">Sign In </button>
	
	</form>
</body>
</html>