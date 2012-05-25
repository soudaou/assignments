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
        
        
    </form>


</body>
</html>