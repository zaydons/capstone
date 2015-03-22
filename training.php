<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Adult Training</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM leaders, adult_training WHERE adult_training.id = leaders.id ORDER BY leaders.lastname ASC");

echo "<table class='table table-striped table-hover'>
<tr>
<th>Last Name</th>
<th>First Name </th>
<th>Youth Protection</th>
<th>Venturing Youth Protection</th>
<th>Safe Swim Defense</th>
<th>Safety Afloat</th>
<th>Physical Wellness</th>
<th>Weather Hazards</th>
<th>Climb on Safely</th>
<th>Trek Safely</th>
<th>Edit</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['lastname'] . "</td>" ; 
echo "<td>" . $row['firstname']. "</td>";
echo "<td>" . $row['youth_protection'] . "</td>";
echo "<td>" . $row['venturing_youth_protection'] . "</td>";
echo "<td>" . $row['safe_swim'] . "</td>";
echo "<td>" . $row['safety_afloat'] . "</td>";
echo "<td>" . $row['physical_wellness'] . "</td>";
echo "<td>" . $row['weather_hazards'] . "</td>";
echo "<td>" . $row['climb_safely'] . "</td>";
echo "<td>" . $row['trek_safely'] . "</td>";
echo "<td> <button type='button' class='btn btn-primary btn-xs'>Edit</button> </td>"; 
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>