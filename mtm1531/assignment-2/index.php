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
		<label for="number1">Number 1</label>
		<input type="number"input id="number1" name="number1">
		
		<label for="number2">Number 2</label>
		<input type="number" input id="number2" name="number2">
		
		<label for="function">Function</label>
		<select id="function" name="function">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="/">/</option>
			<option value="*">*</option>
		</select>
		
		<button>Calculate</button>
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