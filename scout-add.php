<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$middlename = mysqli_real_escape_string($con, $_POST['middlename']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$bsaid = mysqli_real_escape_string($con, $_POST['bsaid']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$zip = mysqli_real_escape_string($con, $_POST['zip']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$homephone = mysqli_real_escape_string($con, $_POST['homephone']);
$cellphone = mysqli_real_escape_string($con, $_POST['cellphone']);
$email1 = mysqli_real_escape_string($con, $_POST['email1']);
$email2 = mysqli_real_escape_string($con, $_POST['email2']);
$datejoined = mysqli_real_escape_string($con, $_POST['datejoined']);
$rank = mysqli_real_escape_string($con, $_POST['rank']);
$rankdate = mysqli_real_escape_string($con, $_POST['rankdate']);
$leadership = mysqli_real_escape_string($con, $_POST['leadership']);
$parent1firstname = mysqli_real_escape_string($con, $_POST['parent1firstname']);
$parent1lastname = mysqli_real_escape_string($con, $_POST['parent1lastname']);
$parent1relation = mysqli_real_escape_string($con, $_POST['parent1relation']);
$parent1homephone = mysqli_real_escape_string($con, $_POST['parent1homephone']);
$parent1cellphone = mysqli_real_escape_string($con, $_POST['parent1cellphone']);
$parent1email =  mysqli_real_escape_string($con, $_POST['parent1email']);
$parent2firstname =  mysqli_real_escape_string($con, $_POST['parent2firstname']);
$parent2lastname =  mysqli_real_escape_string($con, $_POST['parent2lastname']);
$parent2relation =  mysqli_real_escape_string($con, $_POST['parent2relation']);
$parent2homephone =  mysqli_real_escape_string($con, $_POST['parent2homephone']);
$parent2cellphone =  mysqli_real_escape_string($con, $_POST['parent2cellphone']);
$parent2email =  mysqli_real_escape_string($con, $_POST['parent2email']);
$emergency1firstname =  mysqli_real_escape_string($con, $_POST['emergency1firstname']);
$emergency1lastname =  mysqli_real_escape_string($con, $_POST['emergency1lastname']);
$emergency1phone =  mysqli_real_escape_string($con, $_POST['emergency1phone']);
$emergency2firstname =  mysqli_real_escape_string($con, $_POST['emergency2firstname']);
$emergency2lastname =  mysqli_real_escape_string($con, $_POST['emergency2lastname']);
$emergency2phone = mysqli_real_escape_string($con, $_POST['emergency2phone']);



$query1 = "INSERT INTO `scouts`(`scout_id`, `last_name`, `first_name`, `middle_name`, `bsa_id`,
 `address`, `city`, `state`, `zip`, `dob`, `home_phone`, `cell_phone`, `email1`, `email2`,
  `date_joined`, `leadership_position`, `rank`, `rank_date`)
   VALUES (NULL,'".$lastname."','".$firstname."','".$middlename."','".$bsaid."','".$address."','".$city."','".$state."','".$zip."', '".$dob."',
   	'".$homephone."','".$cellphone."','".$email1."','".$email2."','".$datejoined."','".$leadership."','".$rank."','".$rankdate."')";

$exec = mysqli_query($con, $query1);

$query2 = "INSERT INTO `parents`(`id`, `lastname1`, `firstname1`, `relation1`, `homephone1`, `cellphone1`,
 `email1`, `lastname2`, `firstname2`, `relation2`, `homephone2`, `cellphone2`, `email2`, `scout_first`,`scout_last`) 
VALUES (NULL,'".$parent1lastname."','".$parent1firstname."','".$parent1relation."','".$parent1homephone."','".$parent1cellphone."','".$parent1email."',
	'".$parent2lastname."', '".$parent2firstname."','".$parent2relation."','".$parent2homephone."','".$parent2cellphone."','".$parent2email."','".$firstname."','".$lastname."')";

$exec = mysqli_query($con, $query2);

$query3 = "INSERT INTO `emergency_contact`(`id`, `lastname1`, `firstname1`, `phone1`, `lastname2`, `firstname2`, `phone2`)
 VALUES (NULL,'".$emergency1lastname."','".$emergency1lastname."','".$emergency1phone."','".$emergency2lastname."','".$emergency2lastname."','".$emergency2phone."')";

$exec = mysqli_query($con, $query3);

if (!mysqli_query($con,$query3)) {
  die('Error: ' . mysqli_error($con));
}
header("Location: add-scout.php");


?>