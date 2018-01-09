<?php // Initialize variables to null.

session_start();


$name =""; // Sender Name
$email =""; // Sender's email ID
$subject =""; // Subject of mail
$message =""; // Sender's Message
$nameError ="";
$emailError ="";
$subjectError ="";
$messageError ="";
$successMessage =""; // On submittingform below function will execute.
if(isset($_POST['submit'])) { // Checking null values in message.


	if(empty($_POST["name"])){
		$name = '';
	}else{
		$name = test_input($_POST["name"]);
		$_SESSION['nameValue'] = $name; 
	}
	
	// if (empty($_POST["name"])){
	// 	$nameError = "Name is required";
	// }else{
	// 	$name = test_input($_POST["name"]); // check name only contains letters and whitespace
	// 	if (!preg_match("/^[a-zA-Z ]*$/",$name)){
	// 		$nameError = "Only letters and white space allowed";
	// 	}
	// } // Checking null values inthe message.


	if (empty($_POST["email"]))	{
		$_SESSION['emailError'] = "Email is required";
		$emailError = $_SESSION['emailError'];
	}else {
		$email = test_input($_POST["email"]);
		$_SESSION['emailValue'] = $email; 
	} // Checking null values inmessage.
	if (empty($_POST["subject"])){
		$_SESSION['subjectError'] = "Subject is required";
		$subjectError = $_SESSION['subjectError'];
	}else{
		$subject = test_input($_POST["subject"]);
		$_SESSION['subjectValue'] = $subject; 
	} // Checking null values inmessage.
	if (empty($_POST["message"])){
		$_SESSION['messageError'] = "Message is required";
		$messageError = $_SESSION['messageError'];
	}else{
		$message = test_input($_POST["message"]);
		$_SESSION['messageValue'] = $message; 
	} // Checking null values inthe message.
	if( !($email=='') && !($subject=='') &&!($message=='')){ // Checking valid email.
		if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))	{
			$header= $name."<". $email .">";
			$msg1 = " $name Contacted Us. Here is some information about $name.
			Name: $name
			E-mail: $email
			subject: $subject
			Message: $message "; /* Send the message using mail() function */
			if(mail("support@theme_builder.com", $header, $msg1 )){
				$_SESSION['successMessage'] = "Message sent successfully.";
				$successMessage = $_SESSION['successMessage'];
			}else{
				$_SESSION['emailSeverError'] = "Email Server Error!!";
				$emailSeverError = $_SESSION['emailSeverError'];
			}
		}else{ 
			$_SESSION['emailError'] = "Invalid Email!!";
			$emailError = $_SESSION['emailError'];
		}
	}
} // Function for filtering input values.function test_input($data)
function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if(!empty($nameError) || !empty($emailError) || !empty($subjectError) || !empty($messageError) || !empty($successMessage || !empty($emailSeverError))){
	$_SESSION['active'] = 'autofocus';
}else{
	$_SESSION['active'] = '';
}


header("Location: ../contact.php");




?>