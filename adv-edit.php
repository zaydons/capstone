<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$scout_id = $_POST['id'];
$rank = mysqli_real_escape_string($con, $_POST['rank']);
$rankdate = mysqli_real_escape_string($con, $_POST['rankdate']);

echo $scout_id;
echo $rank;
echo $rankdate;

$query = "UPDATE scouts SET rank='$rank', rankdate='$rankdate' WHERE scout_id='$scout_id' LIMIT 1";
// $query = mysqli_query("UPDATE `scouts` SET `rank` = '$rank', `rankdate` = '$rankdate' WHERE `scout_id` = '$scout_id'");
$exec = mysqli_query($con, $query) or die (mysqli_error());
// $exec = mysqli_query($con, $query);

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
 header("Location: advancement.php");


?>