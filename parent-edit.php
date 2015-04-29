<?php
require_once('config.php');
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$parent_id = $_POST['id'];
// echo $leader_id;

$lastname1 = mysqli_real_escape_string($con, $_POST['lastname1']);
$firstname1 = mysqli_real_escape_string($con, $_POST['firstname1']);
$relation1 = mysqli_real_escape_string($con, $_POST['relation1']);
$cellphone1 = mysqli_real_escape_string($con, $_POST['cellphone1']);
$email1 = mysqli_real_escape_string($con, $_POST['email1']);
$lastname2 = mysqli_real_escape_string($con, $_POST['lastname2']);
$firstname2 = mysqli_real_escape_string($con, $_POST['firstname2']);
$relation2 = mysqli_real_escape_string($con, $_POST['relation2']);
$cellphone2 = mysqli_real_escape_string($con, $_POST['cellphone2']);
$email2 = mysqli_real_escape_string($con, $_POST['email2']);

// echo $parent_id;
// echo $lastname1;
// echo $firstname1;
// echo $relation1;
// echo $cellphone1;
// echo $email1;
// echo " ";
// echo $lastname2;
// echo $firstname2;
// echo $relation2;
// echo $cellphone2;
// echo $email2;

$query = "UPDATE parents SET lastname1='".$lastname1."', firstname1='".$firstname1."', relation1='".$relation1."', cellphone1='".$cellphone1."',
	email1='".$email1."', lastname2='".$lastname2."', firstname2='".$firstname2."', relation2='".$relation2."', cellphone2='".$cellphone2."',
	email2='".$email2."' WHERE id='".$parent_id."'";

// echo $query;

$exec = mysqli_query($con, $query) or die (mysqli_error());

echo $exec;

if (!mysqli_query($con,$query)) {
  die('Error: ' . mysqli_error($con));
}
  header("Location: parent-directory.php");


?>