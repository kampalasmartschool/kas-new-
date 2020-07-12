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
// require("api/config.php");


// echo "working";
if (isset($_POST['qualifi']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['name']) && isset($_POST['loc'])){
    
    $qualifi =  $_POST['qualifi'];
    $subject =  $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $loc = $_POST['loc'];
    $phone = $_POST['phone'];
    
    // echo $class;
    // echo "<br/>";
    // echo $curri;
    // echo "<br/>";
    // echo $name;
    // echo $email;
    // echo $loc;
    // echo $phone; 
    
    // scripting checking
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $qualifi = test_input($qualifi);
    $subject = test_input($subject);
    $name = test_input($name);
    $email = test_input($email);
    $loc = test_input($loc);
    $phone = test_input($phone);



    //  db connection

    // $conn = connect_db();
    // if($db){
    //     echo "connection has been done";
    // }
    // $stmt = $conn->prepare("INSERT INTO `be_tutor`(`quali`, `subject`, `email`, `name`, `loc`, `phone`) VALUES (?,?,?,?,?,?)");
    // $stmt->bind_param("ssssss", $u_qualifi, $u_subject, $u_email, $u_name, $u_loc , $u_phone);

    // set parameters and execute
    // $u_qualifi = $qualifi;
    // $u_subject = $subject;
    // $u_email = $email;
    // $u_name = $name;
    // $u_loc = $loc;
    // $u_phone = $phone;

    // $stmt->execute();
    $to='kampalasmartschool@gmail.com,admin@kampalasmartschool.com';
    

		/*initialize the message that is to be sent to the specified email above*/
        $message = "<h2> Tutor Request </h2>";
        $message .=  "<h4 style='padding:5px;'>Name: ".$name."</h4> \n <p>Email: ".$email."</p>  <p>Phone Number".$phone."</p> ";
        $message .= "<p> qualification: " . $qualifi . "</p><p>Subject: ". $subject . "</p><p>Location: ". $loc . "</p></h4>";

        $subject="Request from a Tutor for Kampala Smart School";
		/*set up the email headers*/
		$headers = '';
		$headers .= 'From: ' . $name." ".$email."\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		
		/*send the message and check if its been sent and respond accordingly*/
		if (mail($to, $subject, $message, $headers)){
        echo '<div class="alert alert-success" role="alert" > Thanks for contacting us. We will get back to you soon on your Email: ' .$email.'<a href="index.php" class="btn btn-sucess btn-lg" role="button" aria-disabled="true"> Back to Home </a>';			
        } 
        else{
        echo "Sorry There was a Problem while Sending Your Message Please try again<a href='./'>Back to Home</a>";	
        }
		

    // echo '<div class="alert alert-success" role="alert" > Thank you for applying, we will contact you shortly. </div>';

    // $stmt->close();
    // $conn->close();
    
// }
}
?>



</body>
</html>