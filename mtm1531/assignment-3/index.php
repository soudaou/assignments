<?php 

require_once 'includes/form-processor.php';

?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
	<title>Registration Form Validation</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<h1>Fill this Registration Form:</h1>
	<form method="post" action="index.php">
    	<div>
            <label for="name">
            	Name 
				<?php if (isset($errors['name'])): ?> 
            	<strong class="error">is required</strong> 
				<?php endif; ?>
            </label>
            <input id="name" name="name" required value="<?php echo $name; ?>">
        </div>
        
         <div>
            <label for="email">
            	Email 
				<?php if (isset($errors['email'])): ?> 
            	<strong class="error">is required</strong> 
				<?php endif; ?>
            </label>
            <input id="email" name="email" required value="<?php echo $email; ?>">
        </div>
        
        <div>
            <label for="username">
            	Username 
				<?php if (isset($errors['username'])): ?> 
            	<strong class="error">username is required</strong> 
				<?php endif; ?>
            </label>
            <input id="username" name="username" required value="<?php echo $username; ?>">
            <p>max length 25 characters.</p>
        </div>
        
        <button types="submit">Send</button>
    </form>


</body>
</html>