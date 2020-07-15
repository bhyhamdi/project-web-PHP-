<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	
	<div class="formulaire ">
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		
			
			<input type="text" placeholder="username" name="username" value="<?php echo $username; ?>" ><br>
			<input placeholder="email" type="email" name="email" value="<?php echo $email; ?>"><br>
		
		

			<input type="password" name="password_1" placeholder="password"><br>
			<input type="password" name="password_2" placeholder="confirme password"><br>
		



		<div class="b">
			<button type="submit"  name="register_btn">Register</button>
			<button onclick="Clear();">annuler</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>
</body>
</html>