<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Adult Directory</h1>
<?php include('nav2.php') ?>


<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM leaders ORDER BY lastname ASC");

echo "<table class='table table-striped table-hover'>
<tr>
<th>Last Name</th>
<th>First Name</th>
<th>Position</th>
<th>Email Address</th>
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
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['position'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['cell_phone'] . "</td>";
echo "<td>" . $row['home_phone'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['zip'] . "</td>";
echo "<td> <a href='edit-leader.php?leader_id=$row[id]'> <button type='button' class='btn btn-primary btn-xs'>Edit</button></a> </td>";
echo "<td> <a href='delete-leader.php?leader_id=$row[id]' onclick=\"return confirm('Really delete?');\"> <button type='button' class='btn btn-primary btn-xs'>Delete</button></a> </td>"; 
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>
