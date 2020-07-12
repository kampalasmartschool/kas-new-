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
//  include("api/config.php");

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    echo "working";
//   
if (isset($_POST['class']) && isset($_POST['curri']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['name']) && isset($_POST['loc'])){
    
    $class =  $_POST['class'];
    $curri =  $_POST['curri'];
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

    $class = test_input($class);
    $curri = test_input($curri);
    $name = test_input($name);
    $email = test_input($email);
    $loc = test_input($loc);
    $phone = test_input($phone);



    //  db connection

    // $conn = connect_db();
    // if($db){
    //     echo "connection has been done";
    // }
    // $stmt = $conn->prepare("INSERT INTO `book_tutor`(`class`, `curri`, `email`, `name`, `loc`, `phone`) VALUES (?,?,?,?,?,?)");
    // $stmt->bind_param("ssssss", $u_class, $u_curri, $u_email, $u_name, $u_loc , $u_phone);

    // set parameters and execute
    // $u_class = $class;
    // $u_curri = $curri;
    // $u_email = $email;
    // $u_name = $name;
    // $u_loc = $loc;
    // $u_phone = $phone;

    // $stmt->execute();

    // echo '<div class="alert alert-success" role="alert" > Thank you for registering, we will contact you shortly. </div>';

    // $stmt->close();
    // $conn->close();
    $to='kampalasmartschool@gmail.com,admin@kampalasmartschool.com';
    

    /*initialize the message that is to be sent to the specified email above*/
    $message = "<h2> Need A Tutor </h2>";
    $message .=  "<h4 style='padding:5px;'>Name: ".$name."</h4> \n <p>Email: ".$email."</p>  <p>Phone Number".$phone."</p> ";
    $message .= "<p> curriculam: " . $curri . "</p><p>Class: ". $class . "</p><p>Location: ". $loc . "</p></h4>";

    $subject="Need a tutor FOR specific class";
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

// }
}
?>

<!-- <a href="index.php" class="btn btn-sucess btn-lg" role="button" aria-disabled="true"> Back to Home </a> -->

</body>
</html>