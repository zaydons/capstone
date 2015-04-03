<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Scout Directory</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$scout_id = $_GET['scout_id'];
echo "scout_id: ".$scout_id;
$result = mysqli_query($con,"SELECT * FROM scouts WHERE scout_id='$scout_id' ");
$row = mysqli_fetch_row($result);

var_dump($row);

?>

<table>
<form method="post" action="scout_move.php">
	<?php echo "$row[scout_id]" ?>
        <tr>        
          <td>Last Name</td>
          <td>
            <input type="text" name="last_name" size="20" value='<?php echo $row[last_name]?> '>
          </td>
        </tr>
        <tr>
          <td align="right">
            <input type="submit" 
          name="submit value" value="Edit">
          </td>
        </tr>
      </form>
</table>

</body>
</html>