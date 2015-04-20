<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Contact Scouts</h1>
<?php include('nav2.php') ?>

<?php
// Check, if submitted.
if($Submit){

// Get variables from POST method form.
$subject=$_POST['subject'];
$note=$_POST['note'];

$sender="admin@szaydon.me"; // Your Email here.

echo "Email has been sent to:";

// Connect database
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// mysql_connect("localhost","","");
// mysql_select_db("mail");

// $rs=mysqli_query("select email1,email2 from scouts");
$result = mysqli_query($con,"SELECT email1,email2 FROM scouts");
$row = mysqli_fetch_row($result);


// Do while loop to send email.
while($row=mysqli_fetch_assoc($result)){
$to=$row['email'];
$mail_from="From:$email n";
$mail_from .="Content-Type: text/html; charset=utf-8 n";

mail($to,$subject,$note,$mail_from);

// Show sent emails.
echo "$row[email]<br>";
}
}else{

// Do following codes if not found "Submit" value.(Not submitted) 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<title>Email Form</title>
<body>
<form action="<? echo $PHP_SELF; ?>" method="post" name="form" id="form">
<table>
<tr>
<td align="right">Subject : </td>
<td><input name="email" type="text" id="email" /></td>
</tr>
<tr>
<td align="right" valign="top">Note : </td>
<td><textarea name="comment" cols="60" rows="5" id="comment"></textarea></td>
</tr>
</table>
<input type="submit" name="Submit" value="Send Email" />
</form>
</body>
</html>
<?php 
	} ?>

</body>
</html>