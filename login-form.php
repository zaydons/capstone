<?php include('header.php') ?>
<body>
<p>&nbsp;</p>
 <form class="form-signin" id="form-signin" name="form-signin" method="post" action="login-exec.php">
          <h2>Please sign in</h2>

  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="form-control" id="login" placeholder="Username"/></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="form-control" id="password" placeholder="Password" /></td>
    </tr>
    <tr>
      <td colspan="2"><input class="btn btn-default btn-lg btn-block" type="submit" name="Submit" value="Sign In" /></td>
    </tr>
  </table>
</form>
</body>
</html>
