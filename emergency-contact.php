<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Emergency Contacts</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['scout_id'];
$result = mysqli_query($con,"SELECT * FROM emergency_contact WHERE id='".$id."'");

echo "<table class='table table-striped table-hover'>
<tr>
<th>Scout Name</th>
<th>Contact 1</th>
<th>Phone Number</th>
<th>Contact 2</th>
<th>Phone Number</th>
<th>Edit</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['scout_first']. " " .$row['scout_last'] . "</td>" ; 
echo "<td>" . $row['firstname1']. " "  .$row['lastname1'] . "</td>";
echo "<td>" . $row['phone1'] . "</td>";
echo "<td>" . $row['firstname2']. " "  .$row['lastname2'] . "</td>";
echo "<td>" . $row['phone2'] . "</td>";
echo "<td> <a href='edit-emergency.php?emergency=$row[id]'> <button type='button' class='btn btn-primary btn-xs'>Edit</button></a> </td>"; 
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>