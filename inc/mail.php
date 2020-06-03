<?php



if(isset($_POST['submit'])){ //check if form was submitted
  
	$email = $_POST['email'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
   $success = mail('hribdo@gmail.com', $email, $phone);
	if (!$success) {
	    $errorMessage = error_get_last()['message'];
	}else{
		header('Location: http://www.ittracebd.com');
		// echo $name.$email.$phone;

	}
} 
	


?> 