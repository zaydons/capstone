<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Scout Directory</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM scouts");

echo "<table class='table table-striped table-hover'>
<tr>
<th>Last Name</th>
<th>First Name</th>
<th>Position</th>
<th>Email Address</th>
<th>Email Address 2</th>
<th>Cell Phone</th>
<th>Home Phone</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip Code</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['leadership_position'] . "</td>";
echo "<td>" . $row['email1'] . "</td>";
echo "<td>" . $row['email2'] . "</td>";
echo "<td>" . $row['cell_phone'] . "</td>";
echo "<td>" . $row['home_phone'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['zip'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


</body>
</html>