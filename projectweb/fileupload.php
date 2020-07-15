<?php

$conn = mysqli_connect('localhost', 'root', '', 'multi_login');
session_start();
// uploads files
if (isset($_POST['upload'])) { 
    $filename = $_FILES['file']['name'];
    $username = $_SESSION['user']['username'];


    $destination = '\uploads' . $filename;
	$extension = pathinfo($filename, PATHINFO_EXTENSION);


   
    $file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    //add url to file to use in download 


    define ('SITE_ROOT', realpath(dirname(__FILE__)));
    move_uploaded_file($file, SITE_ROOT.$destination); 
    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
   
    } else {
        
            $sql = "INSERT INTO upload (username , name, size,visibliter ,  files) VALUES ('$username','$filename', $size,'non',  0)";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            
        } else {
            echo "Failed to upload file.";
        }
    }
}






?>
<!DOCTYPE html>
<html>
<head>
	<title>file upload </title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
		<h1><?php echo $_SESSION['user']['username']; ?></h1>
	<label>file upload</label><br>
	<input type="file" name="file">
	<br>
	<input type="submit" name="upload">
	

</form>
<a href="index.php">back </a>
</body>
</html>