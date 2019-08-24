<?php

$servername = "localhost";
 $username = "root"; $password = "";
  $dbname = "thegrabbox";

$email=$_GET['email'];

        
include 'check_con.php';


 $conn = mysqli_connect($servername, $username, $password, $dbname); 
 if (!$conn){     
 			die("Connection failed: " . mysqli_connect_error()); 
			}

    
    $sql = "SELECT * from customer where email='$email' ";
        $result = $conn->query($sql); 
    
    if ($result->num_rows > 0) {     
         while($row = $result->fetch_assoc()) {
                $user = $row['user'];
                $passwd = $row["password"];
        
         }
    } 
        else {   
            die("User Not Found");
        } 


$name = "Grabbox";
$email_from = "timesofsrb@gmail.com"


$mail = new PHPMailer(true);

// Send mail using Gmail
if($send_using_gmail){
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "timesofsrb@gmail.com"; // GMAIL username
    $mail->Password = "TIMEISRIVER"; // GMAIL password
}

// Typical mail data
$mail->AddAddress($email, $name);
$mail->SetFrom($email_from, $name_from);
$mail->Subject = "Grabbox : Password Recovery";
$mail->Body = "Username : ".$user." Password : ".$passwd;

try{
    $mail->Send();
    echo "Success!";
} catch(Exception $e){
    // Something went bad
    echo "Fail :(";
}




 mysqli_close($conn);   
    
    ?>