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
 <?php if ($thanks) : ?>
	<strong>Thank you for registering.</strong>
	<?php else : ?>
	<h1>Fill this Registration Form:</h1>
    
   
	<form method="post" action="index.php">
    	<div>
            <label for="name">
            	<strong>Name </strong>
				<?php if (isset($errors['name'])): ?> 
            	<strong class="error">is required</strong> 
				<?php endif; ?>
            </label>
            <input id="name" name="name" required value="<?php echo $name; ?>">
        </div>
        
         <div>
            <label for="email">
            	<strong>Email </strong>
				<?php if (isset($errors['email'])): ?> 
            	<strong class="error">is required</strong> 
				<?php endif; ?>
            </label>
            <input id="email" name="email" required value="<?php echo $email; ?>">
        </div>
        
        <div>
            <label for="username">
            	<strong>Username </strong>
				<?php if (isset($errors['username'])): ?> 
            	<strong class="error">username is required</strong> 
				<?php endif; ?>
            </label>
            <input id="username" name="username" required value="<?php echo $username; ?>">
            <p>max length 25 characters.</p>
        </div>
        
        <div>
            <label for="password">
            	<strong>Password </strong>
				<?php if (isset($errors['password'])): ?> 
            	<strong class="error">is required</strong> 
				<?php endif; ?>
            </label>
            <input id="password" name="password" required value="<?php echo $password; ?>">
        </div>
        
        <fieldset>
            <legend>
            	<strong>Preferred Language: </strong>
                <?php if (isset($errors['preferredlang'])): ?> 
            	<strong class="error">Choose a preferred language.</strong> 
				<?php endif; ?>
            </legend>
            <input type="radio" id="english" name="preferredlang" value="english" <?php if ($preferredlang == 'english') { echo ' checked'; } ?>>
            <label for="english">English</label>
                
            <input type="radio" id="french" name="preferredlang" value="french" <?php if ($preferredlang == 'french') { echo ' checked'; } ?>>
            <label for="french">French</label>
                
            <input type="radio" id="spanish" name="preferredlang" value="spanish" <?php if ($preferredlang == 'spanish') { echo ' checked'; } ?>>
            <label for="spanish">Spanish</label>
        </fieldset>

		<div>
    		<label for="notes"><strong>Notes</strong></label>
   			 <textarea id="notes" name="notes"><?php echo $notes; ?></textarea>
  		</div>
        
		<div>
        	<input type="checkbox" id="terms" name="terms" vale="1" <?php if (isset($_POST['terms'])) { echo ' checked'; } ?>>
            <label for="terms">
            	<strong>Accept terms?</strong>
            	<?php if (isset($errors['terms'])): ?> 
            	<strong class="error">You must comply!</strong> 
				<?php endif; ?>
            </label>
        </div>

        <button types="submit">Sign Up</button>
    </form>
	<?php endif; ?>
</body>
</html>