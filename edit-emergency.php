<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Edit Emergency Contacts</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['emergency'];

$result = mysqli_query($con,"SELECT * FROM emergency_contact WHERE id='$id' ");
$row = mysqli_fetch_row($result);


?>

<form class="form-horizontal" method="POST" action="emergency-edit.php">
                <fieldset>
                 <div class="form-group">
                    <div class="col-lg-6">
                      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo "$row[0]"?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="scoutfirst" class="col-lg-2 control-label">Scout First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="scoutfirst" disabled value="<?php echo "$row[7]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="scoutlast" class="col-lg-2 control-label">Scout Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="scoutlast" disabled value="<?php echo "$row[8]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency1_firstname" class="col-lg-2 control-label">Emergency Contact 1 First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="emergency1firstname" value="<?php echo "$row[2]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency1_lastname" class="col-lg-2 control-label">Emergency Contact 1 Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="emergency1lastname" value="<?php echo "$row[1]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency1_phone" class="col-lg-2 control-label">Emergency Contact 1 Phone Number</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="emergency1phone" value="<?php echo "$row[3]"?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="emergency2_firstname" class="col-lg-2 control-label">Emergency Contact 2 First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="emergency2firstname" value="<?php echo "$row[5]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency2_lastname" class="col-lg-2 control-label">Emergency Contact 2 Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="emergency2lastname" value="<?php echo "$row[4]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency2_phone" class="col-lg-2 control-label">Emergency Contact 2 Phone Number</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="emergency2phone" value="<?php echo "$row[6]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                      <!-- <button class="btn btn-default">Cancel</button> -->
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
</form>

</body>
</html>


