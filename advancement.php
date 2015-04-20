<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Rank Advancement</h1>
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
<th>First Name</th>
<th>Last Name</th>
<th>Rank</th>
<th>Rank Date</th>
<th>Edit</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['rank'] . "</td>";
echo "<td>" . $row['rank_date'] . "</td>";
echo "<td> <a href='edit-advancement.php?scout_id=$row[scout_id]'> <button type='button' class='btn btn-primary btn-xs'>Edit</button></a> </td>"; 

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>