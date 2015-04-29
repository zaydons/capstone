<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$leader_id = $_POST['id'];

$youth_protection = mysqli_real_escape_string($con, $_POST['youth_protection']);
$venturing_youth_protection = mysqli_real_escape_string($con, $_POST['venturing_youth_protection']);
$safe_swim = mysqli_real_escape_string($con, $_POST['safe_swim']);
$safety_afloat = mysqli_real_escape_string($con, $_POST['safety_afloat']);
$physical_wellness = mysqli_real_escape_string($con, $_POST['physical_wellness']);
$weather_hazards = mysqli_real_escape_string($con, $_POST['weather_hazards']);
$climb_safely = mysqli_real_escape_string($con, $_POST['climb_safely']);
$trek_safely = mysqli_real_escape_string($con, $_POST['trek_safely']);


$query = "UPDATE adult_training SET youth_protection='".$youth_protection."', venturing_youth_protection='".$venturing_youth_protection."',
 safe_swim='".$safe_swim."', safety_afloat='".$safety_afloat."', physical_wellness='".$physical_wellness."', weather_hazards='".$weather_hazards."', 
 climb_safely='".$climb_safely."', trek_safely='".$trek_safely."' WHERE id='".$leader_id."'";


$exec = mysqli_query($con, $query) or die (mysqli_error());

echo $exec;

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
  header("Location: training.php");


?>