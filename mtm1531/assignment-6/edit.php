<?php

require_once 'includes/db.php';
$errors = array();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_NUMBER_INT);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (strlen($movie_title) < 1 || strlen($movie_title) > 256) {
		$errors['movie_title'] = true;
	}
	//if (!in_array($loves_meat, array(0,1))) {
		//$errors['loves_meat'] = true;
	//}
	if (empty($errors)) {
		//we are opening the connection here because this is where we want to start using it
		//we had this here then moved it     require_once 'includes/db.php';
		
		$sql = $db->prepare('
			UPDATE movies
			SET movie_title = :movie_title
				,release_date  = :release_date
					,director = :director
					WHERE id = :id
		');
		// security issues PDO::
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_INT);
		$sql->bindValue(':director', $director, PDO::PARAM_INT);
		$sql->execute();
		
		header('Location: index.php');
		exit;
	}
}
else{
	$sql = $db->prepare('
		SELECT movie_title, release_date, director
		FROM movies
		WHERE id = :id
	');
	$sql->bindValue(':id', $id, PDO::PARAM_INT);
	$sql->execute();
	$results = $sql->fetch();
	
	$movie_title = $results['movie_title'];
	$release_date = $results['release_date'];
	$director = $results['director'];
}

//var_dump($sql->errorInfo());

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit a Movie</title>
</head>

<body>
	
	<h1>Edit a Movie</h1>
	
	<form method="post" actions="edit.php?id=<?php echo $id; ?> ">
		<div>
			<label for="movie_title"> 
			Movie Title 
			<?php if (isset($errors['movie_title'])) : ?>
			<strong class="errors"> is required </strong>
			<?php endif; ?>
			</label>
			<input id="movie_title" name="movie_title" required value=" <?php echo $movie_title; ?> ">
		</div>
		
		<div>
			<label for="release_date"> 
			Release Date 
			<?php if (isset($errors['release_date'])) : ?>
			<strong class="errors"> is required </strong>
			<?php endif; ?>
			</label>
			<input id="release_date" name="release_date"  value=" <?php echo $release_date; ?> ">
		</div>
		
		<div>
			<label for="director"> 
			Director 
			<?php if (isset($errors['director'])) : ?>
			<strong class="errors"> is required </strong>
			<?php endif; ?>
			</label>
			<input id="director" name="director" required value=" <?php echo $director; ?> ">
		</div>
		
		<button type="submit"> Add </button>
		
	</form>


</body>
</html>