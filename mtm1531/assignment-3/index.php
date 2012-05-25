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
    
    <?php if ($thank_you) : ?>
	<strong>Thank you for registering.</strong>
	<?php else : ?>
    
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
        
        <div>
            <label for="password">
            	Password 
				<?php if (isset($errors['password'])): ?> 
            	<strong class="error">is required</strong> 
				<?php endif; ?>
            </label>
            <input id="password" name="password" required value="<?php echo $password; ?>">
        </div>
        
        <fieldset>
            <legend>
            	Preferred Language: 
                <?php if (isset($errors['preferredlang'])): ?> 
            	<strong class="error">Choose a preferred language.</strong> 
				<?php endif; ?>
            </legend>
            <input type="radio" id="english" name="lang" value="en"<?php if ($preferredlang == 'english') { echo ' checked'; } ?>>
            <label for="english">English</label>
                
            <input type="radio" id="french" name="lang" value="fr"<?php if ($preferredlang == 'french') { echo ' checked'; } ?>>
            <label for="french">French</label>
                
            <input type="radio" id="spanish" name="lang" value="sp"<?php if ($preferredlang == 'spanish') { echo ' checked'; } ?>>
            <label for="spanish">Spanish</label>
        </fieldset>

		<div>
    		<label for="notes">
            	Notes
            </label>
   			 <textarea id="notes" name="notes"><?php echo $notes; ?></textarea>
  		</div>

		<div>
        	<input type="checkbox" id="terms" name="terms" vale="1" <?php if (isset($_POST['terms'])) { echo ' checked'; } ?>>
            <label for="terms">
            	Accept terms?
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