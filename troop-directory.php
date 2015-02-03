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
<h1>Troop Directory</h1>
<?php include('menu.php') ?>
<p>
<a href="scout-directory.php">Scout Directory</a><br />
<a href="parent-directory.php">Parents Directory</a><br />
<a href="adult-directory.php">Adult Directory</a>
</p>
</body>
</html>
