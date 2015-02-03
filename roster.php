<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $_SESSION['SESS_FIRST_NAME'];?>'s Profile</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<link href="./menu_assets/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Roster</h1>
<?php include('menu.php') ?>
<br /><br />
<?php 

// set database server access variables: 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "planner";

// open connection 
$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!"); 

// select database 
mysql_select_db($db) or die ("Unable to select database!"); 

// create query 
$query = "SELECT * FROM scouts"; 

// execute query 
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error()); 

// see if any rows were returned 
if (mysql_num_rows($result) > 0) { 
    // yes 
    // print them one after another 
    echo "<table cellpadding=10 border=1>"; 
    while($row = mysql_fetch_row($result)) { 
        echo "<tr>"; 
		
        echo "<td>"."<center>".$row[2]." ".$row[3]." ".$row[1]."</center>"."</td>"; 
        echo "<td>"."<center>".$row[6]." ".$row[7]." ".$row[8]."</center>"."</td>"; 
        echo "<td>".$row[11]."</td>"; 
        echo "</tr>"; 
    } 
    echo "</table>"; 
} 
else { 
    // no 
    // print status message 
    echo "No rows found!"; 
} 

// free result set memory 
mysql_free_result($result); 

// close connection 
mysql_close($connection); 

?>
</body>
</html>
