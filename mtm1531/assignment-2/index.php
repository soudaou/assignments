<?php
var_dump($_POST);
?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>Money calculator form</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') : ?>
	<form method="post" action="index.php">
		<label for="number-one">Number 1</label>
		<input id="number-one" name="number-one">
		
		<label for="number-two">Number 2</label>
		<input id="number-two" name="number-two">
		
		<label for="function">Function</label>
		<select id="function" name="function">
			<option value="plus">+</option>
			<option value="minus">-</option>
			<option value="divide">/</option>
			<option value="multiply">*</option>
		</select>
		
		<button type="calculate">Calculate</button>
	</form>
		<?php else : ?>
			<?php
			switch ($_POST['function']){
				case plus :
				?>
					<h1><?php  echo $_POST['dino-name']; ?> sucks!</h1>
				<?php
				break;
				
				case minus :
				?>
					<h1><?php  echo $_POST['dino-name']; ?> are ok!</h1>
				<?php
				break;
				
				case divide :
				?>
					<h1><?php  echo $_POST['dino-name']; ?> are amaze-a-zing!</h1>
				<?php
				break;
				
				case multiply :
				?>
					<h1><?php  echo $_POST['dino-name']; ?> are amaze-a-zing!</h1>
				<?php
				break;
			}
	?>
	<?php endif; ?>

</body>
</html>