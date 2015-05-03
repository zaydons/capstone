<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['patrol_id'];

$query = "DELETE FROM `patrols` WHERE `patrols`.`id` = '".$id."'";

$exec = mysqli_query($con, $query);

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}

header("Location: patrols.php");

?>
