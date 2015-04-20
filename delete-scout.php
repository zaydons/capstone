<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['scout_id'];

$query1 = "DELETE FROM `scouts` WHERE `scouts`.`scout_id` = '".$id."'";

$exec = mysqli_query($con, $query1);

if (!mysqli_query($con,$query1)) {
  die('Error: ' . mysqli_error($con));
}

$query2 = "DELETE FROM `parents` WHERE `parents`.`id` = '".$id."'";

$exec = mysqli_query($con, $query2);

if (!mysqli_query($con,$query2)) {
  die('Error: ' . mysqli_error($con));
}

$query3 = "DELETE FROM `emergency_contact` WHERE `emergency_contact`.`id` = '".$id."'";

$exec = mysqli_query($con, $query3);

if (!mysqli_query($con,$query3)) {
  die('Error: ' . mysqli_error($con));
}


header("Location: scout-directory.php");

?>
