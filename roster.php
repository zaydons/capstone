<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Roster</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM scouts");
echo "<h3> Scouts </h3>";
echo "<table class='table table-striped table-hover'>
<tr>
<th>First Name</th>
<th>Last Name</th>

<th>Parents</th>
<th>Emergency Contact</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td> <a href='parents.php?scout_id=$row[scout_id]'> <button type='button' class='btn btn-primary btn-xs'>View</button></a> </td>"; 
echo "<td> <a href='emergency-contact.php?scout_id=$row[scout_id]'> <button type='button' class='btn btn-primary btn-xs'>View</button></a> </td>"; 
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM leaders");
echo "<h3> Leaders </h3>";
echo "<table class='table table-striped table-hover'>
<tr>
<th>First Name</th>
<th>Last Name</th>


</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
 
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>



</body>
</html>