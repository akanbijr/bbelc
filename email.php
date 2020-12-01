

<?php
// $message_request = $_POST['message_type'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$subject = $_POST['subject'];
$content = $_POST['message'];

ini_set('date.timezone', 'Africa/Lagos');
$DD = date('M d, Y');

$recipients = "info@bbelcabj.com";
$recipients2 = "brightbeginningschool1@gmail.com";

$fromer = $email;

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Create email headers
$headers .= "From: ".$email."\r\n";
$headers .= "Reply-To: brightbeginningschool1@gmail.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$message = '
			<h4>NAME: '.$name.'</h4><br>
			<h4>EMAIL ADDRESS: '.$email.'</h4><br>
            <h4>PHONE NUMBER: '.$phone_number.'</h4><br> 
            <h4>SUBJECT: '.$subject.'</h4><br>    
            <h4>MESSAGE: '.$content.'</h4><br>
            <h4>SENT ON: '.$DD.'</h4>';
            
if(mail($recipients,$subject, $message, $headers))
{ 
    mail($recipients2, $subject, $message, $headers);
   
    echo '<script type="text/javascript">alert("Your message has been sent and currently receiving attention."); window.location = "index.php";</script>';
    exit();
}
else
{
    echo '<script type="text/javascript">alert("Error sending your request, please try again later."); window.location = "index.php";</script>';
    exit();
}
?>