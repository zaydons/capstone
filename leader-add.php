<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$bsaid = mysqli_real_escape_string($con, $_POST['bsaid']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$zip = mysqli_real_escape_string($con, $_POST['zip']);
$homephone = mysqli_real_escape_string($con, $_POST['homephone']);
$cellphone = mysqli_real_escape_string($con, $_POST['cellphone']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$position = mysqli_real_escape_string($con, $_POST['position']);

$youthprotection = mysqli_real_escape_string($con, $_POST['youthprotection']);
$venturing = mysqli_real_escape_string($con, $_POST['venturing_youth_protection']);
$safe_swim = mysqli_real_escape_string($con, $_POST['safe_swim']);
$safety_afloat = mysqli_real_escape_string($con, $_POST['safety_afloat']);
$physical_wellness = mysqli_real_escape_string($con, $_POST['physical_wellness']);
$weather_hazards = mysqli_real_escape_string($con, $_POST['weather_hazards']);
$climb_safely = mysqli_real_escape_string($con, $_POST['climb_safely']);
$trek_safely = mysqli_real_escape_string($con, $_POST['trek_safely']);

// var_dump($_POST);

$query1 = "INSERT INTO `leaders`(`id`, `lastname`, `firstname`, `bsa_id`, `email`, `address`, `city`, `state`, `zip`, `home_phone`, `cell_phone`, `position`) VALUES (NULL,'".$lastname."','".$firstname."','".$bsaid."','".$email."', '".$address."','".$city."','".$state."','".$zip."',	'".$homephone."', '".$cellphone."','".$position."')";

$exec = mysqli_query($con, $query1) or die ('error1');

$query2 = "INSERT INTO `adult_training`(`id`, `youth_protection`, `venturing_youth_protection`, `safe_swim`, `safety_afloat`, `physical_wellness`, `weather_hazards`, `climb_safely`, `trek_safely`) VALUES (NULL,'".$youthprotection."','".$venturing."','".$safe_swim."','".$safety_afloat."','".$physical_wellness."','".$weather_hazards."','".$climb_safely."','".$trek_safely."')";

$exec = mysqli_query($con, $query2) or die ('error2'); 

if (!mysqli_query($con,$query2)) {
  die('Error: ' . mysqli_error($con));
}

header("Location: add-leader.php");


?>