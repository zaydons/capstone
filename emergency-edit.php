<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$emergency_id = $_POST['id'];

$emergency1firstname = mysqli_real_escape_string($con, $_POST['emergency1firstname']);
$emergency1lastname = mysqli_real_escape_string($con, $_POST['emergency1lastname']);
$emergency1phone = mysqli_real_escape_string($con, $_POST['emergency1phone']);
$emergency2firstname = mysqli_real_escape_string($con, $_POST['emergency2firstname']);
$emergency2lastname = mysqli_real_escape_string($con, $_POST['emergency2lastname']);
$emergency2phone = mysqli_real_escape_string($con, $_POST['emergency2phone']);

$query = "UPDATE emergency_contact SET lastname1='".$emergency1lastname."', firstname1='".$emergency1firstname."', phone1='".$emergency1phone."', 
	lastname2='".$emergency2lastname."', firstname2='".$emergency2firstname."', phone2='".$emergency2phone."' WHERE id='".$emergency_id."'";

$exec = mysqli_query($con, $query) or die (mysqli_error());


if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
  header("Location: roster.php");

?>