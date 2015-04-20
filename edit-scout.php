<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Edit Scout</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$scout_id = $_GET['scout_id'];
echo "scout_id: ".$scout_id;

/*This is where the error is */
$result = mysqli_query($con,"SELECT * FROM scouts WHERE scout_id='$scout_id' ");
$row = mysqli_fetch_row($result);

//var_dump($row);
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
                    <label for="leadership_position" class="col-lg-2 control-label">Position</label>
                    <div class="col-lg-10">
                       <select class="form-control" id="leadership_position">
                        <option value="None">None</option>
                        <option value="Assistant Patrol Leader">Assistant Patrol Leader</option>
                        <option value="Assistant Senior Patrol Leader">Assistant Senior Patrol Leader</option>
                        <option value="Bugler">Bugler</option>
                        <option value="Chaplain Aide">Chaplain Aide</option>
                        <option value="Den Chief">Den Chief</option>
                        <option value="Historian">Historian</option>
                        <option value="Junior Assistant Scoutmaster">Junior Assistant Scoutmaster</option>
                        <option value="Leave No Trace Trainer">Leave No Trace Trainer</option>
                        <option value="Librarian">Librarian</option>
                        <option value="Order of the Arrow Represenative">Order of the Arrow Represenative</option>
                        <option value="Patrol Leader">Patrol Leader</option>
                        <option value="Quartermaster">Quartermaster</option>
                        <option value="Scribe">Scribe</option>
                        <option value="Senior Patrol Leader">Senior Patrol Leader</option>
                        <option value="Troop Guide">Troop Guide</option>
                        <option value="Webmaster">Webmaster</option>
                      </select>
                        <!-- <input type="text" class="form-control" id="last_name" value="<?php echo "$row[15]"?>"> -->
                       </div>
                  </div>
                  <div class="form-group">
                    <label for="email1" class="col-lg-2 control-label">Email Address</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="email1" value="<?php echo "$row[12]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email2" class="col-lg-2 control-label">Email Address 2</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="email2" value="<?php echo "$row[13]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cell_phone" class="col-lg-2 control-label">Cell Phone</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="cell_phone" value="<?php echo "$row[11]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="home_phone" class="col-lg-2 control-label">Home Phone</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="home_phone" value="<?php echo "$row[10]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="address" value="<?php echo "$row[5]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="city" value="<?php echo "$row[6]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="state" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="state" value="<?php echo "$row[7]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="zip" class="col-lg-2 control-label">Zip</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="zip" value="<?php echo "$row[8]"?>">
                    </div>
                  </div>
                </fieldset>
</form>

</body>
</html>


