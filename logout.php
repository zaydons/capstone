<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<?php include('header.php') ?>
<body>
<h1>Logout</h1>
You have been logged out. Click <a href="index.php">here</a> to Login, or you will be redirected in 5 seconds.
<?php 
	header('Refresh: 5; URL=http://szaydon.me/troop');
?>

</body>
</html>