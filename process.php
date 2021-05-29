<?php ob_start();



	if(isset($_POST['submit'])) {
		
	$to = "indradevkr8@gmail.com";
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$txt = $_POST['message'];
	$headers = "From: " .$email ;
	
	mail($to,$subject,$txt,$headers);
	
	header("Location: index.html");
	

		
	
	}




?>
