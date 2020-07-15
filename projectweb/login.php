<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	
</head>
<body>
	
	
	
	<div class="formulaire2" >
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		
			
			<input type="text" name="username" placeholder="username"><br>
		

			
			<input type="password" name="password" placeholder="password"> <br>
		

		<div class="b">
			<button type="submit"  name="login_btn">Login</button>
			<button onclick="Clear();">annuler</button><br>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</div>
</body>
<script type="text/javascript" src="js.js"></script>

</html>