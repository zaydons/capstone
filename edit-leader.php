<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Edit Leader</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['leader_id'];
echo "leader_id: ".$id;

$result = mysqli_query($con,"SELECT * FROM leaders WHERE id='$id' ");
$row = mysqli_fetch_row($result);

// var_dump($row);
// echo $row[0];
// echo $row[1];
// echo $row[2];
// echo $row[3];
?>

<form class="form-horizontal">
                <fieldset>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[1]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="first-name" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[2]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Position</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[10]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Email Address</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[3]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Cell Phone</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[9]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Home Phone</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[8]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[4]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[5]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[6]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Zip</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="last_name" value="<?php echo "$row[7]"?>">
                    </div>
                  </div>


                </fieldset>
</form>

</body>
</html>


