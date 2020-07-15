<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style type="text/css">
		
body{
	background-image: url(book.jpg );
	height: 100%;
	margin: 0;
	background-repeat: no-repeat;
	background-size: 1600px 850px  ;
	
}


	</style>
	<div class="header">
		<h2>User Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png" style="width:200px;height:250px;" >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						
						<a href="fileupload.php" style="color: red;">+ add file</a>&nbsp;&nbsp;&nbsp;
						

						<a href="index.php?logout='1'" style="color: red;">logout</a><br>
						
					</small>

				<?php endif ?>
				<br><br>
				<?php
				$conn = mysqli_connect('localhost', 'root', '', 'multi_login');
				$sql = "SELECT name FROM `upload` WHERE visibliter= 'oui'";
				$result = mysqli_query($conn, $sql);
				if (mysqli_num_rows($result) > 0) {
 				 
  				while($row = mysqli_fetch_assoc($result)) {
   				echo  $row["name"] ."<br>";
 				 }
				 }else {
				  echo "0 results";
				}

				mysqli_close($conn);
				?>
					<a href="/projectweb/fileupload.php/uploads/Cv.pdf">download </a>

			</div>
		</div>
	</div>
</body>
</html>