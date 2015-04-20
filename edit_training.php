<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Edit Leader Training</h1>
<?php include('nav2.php') ?>

<?php
$con=mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$id = $_GET['leader_id'];
echo "leader_id: ".$id;

$result = mysqli_query($con,"SELECT * FROM adult_training WHERE id='$id' ");
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
                    <label for="youth_protection" class="col-lg-2 control-label">Youth Protection</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="youth_protection" value="<?php echo "$row[1]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="venturing_youth_protection" class="col-lg-2 control-label">Venturing Youth Protection</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="venturing_youth_protection" value="<?php echo "$row[2]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="safe_swim" class="col-lg-2 control-label">Safe Swim</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="safe_swim" value="<?php echo "$row[3]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="safety_afloat" class="col-lg-2 control-label">Safety Afloat</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="safety_afloat" value="<?php echo "$row[4]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="physical_wellness" class="col-lg-2 control-label">Physical Wellness</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="physical_wellness" value="<?php echo "$row[5]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="weather_hazards" class="col-lg-2 control-label">Weather Hazards</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="weather_hazards" value="<?php echo "$row[6]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="climb_safely" class="col-lg-2 control-label">Climb Safely</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="climb_safely" value="<?php echo "$row[7]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="trek_safely" class="col-lg-2 control-label">Trek Safely</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="trek_safely" value="<?php echo "$row[8]"?>">
                    </div>
                  </div>
                </fieldset>
</form>

</body>
</html>


