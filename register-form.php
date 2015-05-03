<body>
<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
<form class="form-horizontal" id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <fieldset>
    <div class="form-group">        
      <label for="fname" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="fname">
      </div>
    </div>    
    <div class="form-group">        
      <label for="lname" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="lname">
      </div>
    </div>
    <div class="form-group">        
      <label for="username" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-6">
        <input type="text" class="form-control" name="login">
      </div>
    </div>
    <div class="form-group">        
      <label for="password" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" name="password">
      </div>
    </div>
    <div class="form-group">        
      <label for="cpassword" class="col-lg-2 control-label">Confirm Password</label>
      <div class="col-lg-6">
        <input type="password" class="form-control" name="cpassword">
      </div>
    </div>    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <!-- <button class="btn btn-default">Cancel</button> -->
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>
