<?php

require_once 'includes/db.php';

$sql = $db->query('
	SELECT id, movie_title, release_date, director
	FROM movies
	ORDER BY movie_title ASC
');

//var_dump($db->errorInfo());

$results = $sql->fetchALL();

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<h1>Movies of the year!</h1>
	
	<div id="movieinfo">
		<a href="add.php"> Add a Movie </a>
		<?php foreach ($results as $movie) : ?>
		<h2>
			<a href="single.php?id=<?php echo $movie['id']; ?>">
			<?php echo $movie['movie_title']; ?>
			</a>
		</h2>
		<dl>
			<dt><strong>Release Date</strong></dt>
			<dd><?php echo $movie['release_date']; ?></dd>
			<dt><strong>Director</strong></dt>
			<dd><?php echo $movie['director']; ?></dd>
		</dl>
		<?php endforeach ?>
	</div>
	
</body>
</html>