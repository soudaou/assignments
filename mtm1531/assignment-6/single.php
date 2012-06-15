<?php

require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = $db->prepare('
	SELECT id, movie_title, release_date, director
	FROM movies
	WHERE id =  :id
');
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();

$results = $sql->fetch();

?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $results['movie_title']; ?> &middot; Movies</title>
	<link href="css/general.css" rel="stylesheet">

</head>

<body>
	<h1>Movies of the year!</h1>

	<div id="single">
		<h3> <?php echo $results['movie_title']; ?></h3>
		<dl>
			<dt> <strong>Release Date</strong> </dt>
			<dd><?php echo $results['release_date']; ?></dd>
			<dt><strong> Director </strong></dt>
			<dd><?php echo $results['director']; ?></dd>
		</dl>
		
		<a href="edit.php?id=<?php echo $id; ?>"> Edit </a>
		
		<a href="delete.php?id=<?php echo $id; ?>"> Delete </a>
	</div>
	
</body>
</html>