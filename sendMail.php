<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kampala Smart School</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="images/favicon.ico" rel="shortcut icon"/>

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

<body>
<?php
if (isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['msg'])){
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	if(!empty($_POST['phone'])){
		$tel=$_POST['phone'];
	}
	else{
		$tel="no-tel";
	}
	$msg=$_POST['msg'];

	 // ------------------------------------------
    //  db connection
	require("api/config.php");
    $conn = connect_db();
    if(!$conn){
        echo '<div class="alert alert-success" role="alert" > Sorry There was a Problem while Sending Your Message Please try again <a href="index.php" class="btn btn-outline-danger btn-lg" role="button" aria-disabled="true"> Back to Home </a>';			
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO `message`(`name`, `email`, `phone`, `message`) VALUES (?,?,?,?)");
            $stmt->bind_param("ssss", $name, $mail, $tell, $message);
        
            // set parameters and execute
            $name = $fname;
            $mail = $email;
            $tell = $tel;
            $message = $msg;
        
            $stmt->execute();

            echo '<div class="alert alert-success" role="alert" > Thanks for contacting us. We will get back to you soon on your Email: ' .$email.' <a href="index.php" class="btn btn-outline-success btn-lg" role="button" aria-disabled="true"> Back to Home </a>';			
            
            $stmt->close();
            $conn->close();
        } catch (Exception $e) {
            echo '<div class="alert alert-success" role="alert" > Sorry There was a Problem while Sending Your Message Please try again <a href="index.php" class="btn btn-outline-danger btn-lg" role="button" aria-disabled="true"> Back to Home </a>';			
        }
    }
   
    // -------------------------------------------

	// echo $fname;

	// $to='kampalasmartschool@gmail.com,admin@kampalasmartschool.com';

	// /*initialize the message that is to be sent to the specified email above*/
	// $message =  "<h4 style='padding:5px; border:1px solid #000;'>Name: ".$fname."</h4> \n <p>Email: ".$email."</p> \n <p>Phone Number".$tel."</p> \n </p>Message:".$msg."</p>";
	// $subject="Message From KAS Client:";
	// /*set up the email headers*/
	// $headers = '';
	// $headers .= 'From: ' . $fname." ".$email."\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	
	// /*send the message and check if its been sent and respond accordingly*/
	// if (mail($to, $subject, $message, $headers)){
	// 	echo"Hey ". $fname ." We have received your message, we shall get back to you immediately on your Email: ".$email."<br/> <a href='./'>Back to Home</a>";			} 
	// else{
	// 	echo "Sorry There was a Problem while Sending Your Message Please try again<a href='./'>Back to Home</a>";	
	// }	

}

else{

header('location:index.php');
}


?>



</body>
</html>
