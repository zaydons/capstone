<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$leader_id = $_POST['id'];
echo $leader_id;

$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$position = mysqli_real_escape_string($con, $_POST['position']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$cell_phone = mysqli_real_escape_string($con, $_POST['cell_phone']);
$home_phone = mysqli_real_escape_string($con, $_POST['home_phone']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$zip = mysqli_real_escape_string($con, $_POST['zip']);


$query = " UPDATE leaders SET lastname='".$lastname."', firstname='".$firstname."', position='".$position."', email='".$email."', cell_phone='".$cell_phone."',
	home_phone='".$home_phone."', address='".$address."', city='".$city."', state='".$state."', zip='".$zip."' WHERE id='".$leader_id."'";

// echo $query;

$exec = mysqli_query($con, $query) or die (mysqli_error());

echo $exec;

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
  header("Location: adult-directory.php");


?>