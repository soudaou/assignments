<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies</title>
</head>

<body>

	<?php foreach ($results as $movie) : ?>
	<h2>
		<a href="single.php?id=<?php echo $movie['id']; ?>">
		<?php echo $movie['movie-title']; ?>
		</a>
	</h2>
	<dl>
		<dt>Release Date</dt>
		<dd><?php echo $movie['release_date']; ?></dd>
		<dt>Director</dt>
		<dd><?php echo $movie['director']; ?></dd>
	</dl>
	<?php endforeach ?>
	
</body>
</html>