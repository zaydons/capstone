<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$scout_id = $_POST['id'];

$leadership_position = mysqli_real_escape_string($con, $_POST['leadership_position']);
$email1 = mysqli_real_escape_string($con, $_POST['email1']);
$email2 = mysqli_real_escape_string($con, $_POST['email2']);
$cell_phone = mysqli_real_escape_string($con, $_POST['cell_phone']);
$home_phone = mysqli_real_escape_string($con, $_POST['home_phone']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state= mysqli_real_escape_string($con, $_POST['state']);
$zip = mysqli_real_escape_string($con, $_POST['zip']);

$query = "UPDATE scouts SET leadership_position='".$leadership_position."', email1='".$email1."', email2='".$email2."', cell_phone='".$cell_phone."',
	home_phone='".$home_phone."', address='".$address."', city='".$city."', state='".$state."', zip='".$zip."' WHERE scout_id='".$scout_id."'";


$exec = mysqli_query($con, $query) or die (mysqli_error());


if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
  header("Location: scout-directory.php");


?>