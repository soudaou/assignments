<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>JS Form Validation</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	
	<form>
		<div>
			<label for="username">Username</label>
			<input id="username" name="username" required>
		
			<strong class="user-available" data-status="unchecked"> <!--    The "data-" does exist in html5 and you can add anything after the " - "     -->
				Available
			</strong>
		</div>
		<div>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<strong>Password Required</strong>
			<ul class="pass-reqs">
				<li class="pass-length"> Atleast 6 characters long </li>
				<li class="pass-lower"> 1 lowercase letter </li>
				<li class="pass-upper"> 1 uppercase letter </li>
				<li class="pass-num"> 1 number </li>
				<li class="pass-symbol"> 1 symbol </li>
			</ul>
		</div>
		
		<button type="submit">Submit</button>
	</form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/form-validation.js"></script>
</body>
</html>