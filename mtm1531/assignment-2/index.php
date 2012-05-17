<?php			
$number1 = 0;
$number2 = 0;
$function = '+';
$answer = 0;

if (isset($_POST['number1'])) {
  $number1 = $_POST['number1'];
}

if (isset($_POST['number2'])) {
  $number2 = $_POST['number2'];
}

if (isset($_POST['function'])) {
  $function = $_POST['function'];

			switch ($_POST['function']){
		case '+':
			$answer = $number1 + $number2;
			break;
		case '-':
			$answer = $number1 - $number2;
			break;
		case '/':
			$answer = $number1 / $number2;
			break;
		case '*':
			$answer = $number1 * $number2;
			break;
			}
}
	$total = $answer * 1.13;

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>Money calculator form</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
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
		
		<strong>$<?php echo number_format($total, 2); ?></strong>
	</form>


</body>
</html>