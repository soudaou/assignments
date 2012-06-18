<?php
// we can just add session_start at the top cause you need it from the beginning
session_start();

function get_hashed_password ($password) {
	$rand = substr(strtr(base64_encode(openssl_random_pseudo_bytes(16))	, '+' ,  '.'), 0, 22);
	$salt = '$2a$12$'  . $rand;
	
	return crypt ($password, $salt);
}

function user_create ($db, $username, $password) {
	$sql = $db->prepare('
		INSERT INTO users (username, password)
		VALUES (:username, :password)
		');
		$sql->bindValue(':username', $username, PDO::PARAM_STR);
		$sql->bindValue(':password', get_hashed_password($password), PDO::PARAM_STR);
		$sql->execute();
		// Returns the last id from last inserted
		return $db->lastInsertId();
}

function user_is_signed_in() {
	if(!isset($_SESSION['user-id'] )) {
		return false;
	}
	return true;
}