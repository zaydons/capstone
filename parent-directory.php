<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Parent Directory</h1>
<?php include('nav2.php') ?>
<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM parents, scouts");

echo "<table class='table table-striped table-hover'>
<tr>
<th>Scout Name</th>
<th>Parent 1</th>
<th>Relation</th>
<th>Home Phone</th>
<th>Cell Phone</th>
<th>Email</th>
<th>Parent 2</th>
<th>Relation</th>
<th>Home Phone</th>
<th>Cell Phone</th>
<th>Email</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['first_name'] , $row['last_name'] . "</td>" ; 
echo "<td>" . $row['firstname1'] , $row['lastname1'] . "</td>";
echo "<td>" . $row['relation1'] . "</td>";
echo "<td>" . $row['homephone1'] . "</td>";
echo "<td>" . $row['cellphone1'] . "</td>";
echo "<td>" . $row['email1'] . "</td>";
echo "<td>" . $row['firstname2'] , $row['lastname2'] . "</td>";
echo "<td>" . $row['relation2'] . "</td>";
echo "<td>" . $row['homephone2'] . "</td>";
echo "<td>" . $row['cellphone2'] . "</td>";
echo "<td>" . $row['email2'] . "</td>";
echo "<td> <a href='edit-parents.php?parents=$row[id]'> <button type='button' class='btn btn-primary btn-xs'>Edit</button></a> </td>"; 

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>