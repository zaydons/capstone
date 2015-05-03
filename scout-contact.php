<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//pull the 2 email addresses from the scout database
$contacts = mysqli_query($con,"SELECT email1,email2 FROM scouts");

//put them all in an array
while($row = mysqli_fetch_array($contacts))
{
	$addresses[] = $row['email1'] ;
	$addresses[] = $row['email2'] ;
}

//put in the right format for emailing
$to = implode(",", $addresses);
//get the subject and message from previous page
$subject = mysqli_real_escape_string($con, $_POST['subject']);
$message = mysqli_real_escape_string($con, $_POST['message']);

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: admin@szaydon.me\r\n";
$headers .= "Reply-To: sal@szaydon.me\r\n";
$headers .= "Return-Path: sal@szaydon.me\r\n";

$send_subject = "Troop 322 Scouts | ".$subject; 
echo $to;
echo $subject;
echo $message;
echo $headers;
echo $send_subject;

$sendmail = mail($to,$send_subject,$message,$headers);
if($sendmail = true){
	header("Location: successful-mail.php");
}
else{
	header("Location: mail-failed.php");
}

mysqli_close($con);
?>