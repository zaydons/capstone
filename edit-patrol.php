<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Edit Parents</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['patrol_id'];
// echo "patrol: " .$id. " " ;

$result = mysqli_query($con,"SELECT * FROM patrols WHERE id='$id' ");
$row = mysqli_fetch_row($result);

?>
<form class="form-horizontal" method="POST" action="patrol-edit.php">
                <fieldset>
                 <div class="form-group">
                    <div class="col-lg-6">
                      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo "$row[0]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="patrol_name" class="col-lg-2 control-label">Patrol Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control"  name="patrol_name" value="<?php echo "$row[1]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="patrol_leader" class="col-lg-2 control-label">Patrol Leader</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="patrol_leader" value="<?php echo "$row[10]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="as_patrol_leader" class="col-lg-2 control-label">Assistant Patrol Leader</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="as_patrol_leader" value="<?php echo "$row[11]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member1" class="col-lg-2 control-label">Member 1</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member1" value="<?php echo "$row[2]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member2" class="col-lg-2 control-label">Member 2</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member2" value="<?php echo "$row[3]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member3" class="col-lg-2 control-label">Member 3</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member3" value="<?php echo "$row[4]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member4" class="col-lg-2 control-label">Member 4</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member4" value="<?php echo "$row[5]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member5" class="col-lg-2 control-label">Member 5</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member5" value="<?php echo "$row[6]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member6" class="col-lg-2 control-label">Member 6</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member6" value="<?php echo "$row[7]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member7" class="col-lg-2 control-label">Member 7</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member7" value="<?php echo "$row[8]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member8" class="col-lg-2 control-label">Member 8</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" name="member8" value="<?php echo "$row[9]"?>">
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


