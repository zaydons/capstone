<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Edit Advancement</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$scout_id = $_GET['scout_id'];
echo "scout id: " .$scout_id. " " ;

$result = mysqli_query($con,"SELECT scout_id,first_name,last_name,rank,rank_date FROM scouts WHERE scout_id='$scout_id' ");
$row = mysqli_fetch_array($result);

 //var_dump($row);
 //echo $row[0];
 //echo $row[1];
 //echo $row[2];
 //echo $row[3];
?>

<form class="form-horizontal" method="POST" action="adv-edit.php">
                <fieldset>
                  <div class="form-group">
                    <div class="col-lg-10">
                      <input type="hidden" class="form-control" id="id" name="id" readonly value="<?php echo "$row[0]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstname" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="firstname" name="firstname" disabled value="<?php echo "$row[1]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" id="lastname" name="lastname" disabled value="<?php echo "$row[2]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="rank" class="col-lg-2 control-label">Rank</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="rank" name="rank" value="<?php echo $row[3]; ?>">
                        <option <?php if ($row[3] == 'None') echo 'selected'; ?> value="None">None</option>
                        <option <?php if ($row[3] == 'Scout') echo 'selected'; ?> value="Scout">Scout</option>
                        <option <?php if ($row[3] == 'Tenderfoot') echo 'selected'; ?> value="Tenderfoot">Tenderfoot</option>
                        <option <?php if ($row[3] == 'Second Class') echo 'selected'; ?> value="Second Class">Second Class</option>
                        <option <?php if ($row[3] == 'First Class') echo 'selected'; ?> value="First Class">First Class</option>
                        <option <?php if ($row[3] == 'Star') echo 'selected'; ?> value="Star">Star</option>
                        <option <?php if ($row[3] == 'Life') echo 'selected'; ?> value="Life">Life</option>
                        <option <?php if ($row[3] == 'Eagle') echo 'selected'; ?> value="Eagle">Eagle</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="rank_date" class="col-lg-2 control-label">Rank Date</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="rank_date" name="rankdate">
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
