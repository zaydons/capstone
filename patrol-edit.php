<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$patrol_id = $_POST['id'];
// echo $leader_id;

$patrol_name = mysqli_real_escape_string($con, $_POST['patrol_name']);
$patrol_leader = mysqli_real_escape_string($con, $_POST['patrol_leader']);
$as_patrol_leader = mysqli_real_escape_string($con, $_POST['as_patrol_leader']);
$member1 = mysqli_real_escape_string($con, $_POST['member1']);
$member2 = mysqli_real_escape_string($con, $_POST['member2']);
$member3 = mysqli_real_escape_string($con, $_POST['member3']);
$member4 = mysqli_real_escape_string($con, $_POST['member4']);
$member5 = mysqli_real_escape_string($con, $_POST['member5']);
$member6 = mysqli_real_escape_string($con, $_POST['member6']);
$member7 = mysqli_real_escape_string($con, $_POST['member7']);
$member8 = mysqli_real_escape_string($con, $_POST['member8']);

$query = "UPDATE patrols SET patrol_name='".$patrol_name."', member1='".$member1."', member2='".$member2."', member3='".$member3."',
	member4='".$member4."', member5='".$member5."', member6='".$member6."', member7='".$member7."', member8='".$member8."',
	patrol_leader='".$patrol_leader."', as_patrol_leader='".$as_patrol_leader."' WHERE id='".$patrol_id."'";

echo $query;

$exec = mysqli_query($con, $query) or die (mysqli_error());

 echo $exec;

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
  header("Location: patrols.php");


?>