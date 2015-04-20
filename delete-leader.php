<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['leader_id'];

$query1 = "DELETE FROM `leaders` WHERE `leaders`.`id` = '".$id."'";

$exec = mysqli_query($con, $query1);

if (!mysqli_query($con,$query1)) {
  die('Error: ' . mysqli_error($con));
}

$query2 = "DELETE FROM `adult_training` WHERE `adult_training`.`id` = '".$id."'";

$exec = mysqli_query($con, $query2);

if (!mysqli_query($con,$query2)) {
  die('Error: ' . mysqli_error($con));
}

header("Location: adult-directory.php");

?>
