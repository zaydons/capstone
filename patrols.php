<?php include('header.php') ?>
<?php require_once('auth.php'); ?>
<?php require_once('config.php');?>

<body>
<h1>Patrols</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM patrols");

echo "<table class='table table-striped table-hover'>
<tr>
<th>Patrol Name</th>
<th>Patrol Leader</th>
<th>Assistant Patrol Leader</th>
<th>Member</th>
<th>Member</th>
<th>Member</th>
<th>Member</th>
<th>Member</th>
<th>Member</th>
<th>Member</th>
<th>Member</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['patrol_name'] . "</td>";
echo "<td>" . $row['patrol_leader'] . "</td>";
echo "<td>" . $row['as_patrol_leader'] . "</td>";
echo "<td>" . $row['member1'] . "</td>";
echo "<td>" . $row['member2'] . "</td>";
echo "<td>" . $row['member3'] . "</td>";
echo "<td>" . $row['member4'] . "</td>";
echo "<td>" . $row['member5'] . "</td>";
echo "<td>" . $row['member6'] . "</td>";
echo "<td>" . $row['member7'] . "</td>";
echo "<td>" . $row['member8'] . "</td>";
echo "<td> <a href='edit-patrol.php?patrol_id=$row[id]'> <button type='button' class='btn btn-primary btn-xs'>Edit</button></a> </td>"; 
echo "<td> <a href='delete-patrol.php?patrol_id=$row[id]'> <button type='button' class='btn btn-primary btn-xs'>Delete</button></a> </td>"; 

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>


</body>
</html>
