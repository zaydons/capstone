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
$id = $_GET['parents'];
echo "parents: " .$id. " " ;

$result = mysqli_query($con,"SELECT * FROM parents,scouts WHERE id='$id' ");
$row = mysqli_fetch_row($result);

// var_dump($row);
// echo $row[0];
// echo $row[1];
// echo $row[2];
// echo $row[3];
?>
<?php
  // echo "<br/> Scout Name: ";
  // echo $row[15]; 
  // echo " ";
  // echo $row[14];
?>
<form class="form-horizontal" method="POST" action="parent-edit.php">
                <fieldset>
                 <div class="form-group">
                    <div class="col-lg-10">
                      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo "$row[0]"?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="scoutfirst" class="col-lg-2 control-label">Scout First Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control"  name="scoutfirst" disabled value="<?php echo "$row[13]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="scoutlast" class="col-lg-2 control-label">Scout Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control"  name="scoutlast" disabled value="<?php echo "$row[14]"?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="lastname1" class="col-lg-2 control-label">Parent 1 Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control"  name="lastname1" value="<?php echo "$row[1]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstname1" class="col-lg-2 control-label">Parent 1 First Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="firstname1" value="<?php echo "$row[2]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="relation1" class="col-lg-2 control-label">Relation</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="relation1" value="<?php echo "$row[3]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cellphone1" class="col-lg-2 control-label">Parent 1 Cell Phone</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="cellphone1" value="<?php echo "$row[5]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email1" class="col-lg-2 control-label">Parent 1 Email Address</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="email1" value="<?php echo "$row[6]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastname2" class="col-lg-2 control-label">Parent 2 Last Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="lastname2" value="<?php echo "$row[7]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="firstname2" class="col-lg-2 control-label">Parent 2 First Name</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="firstname2" value="<?php echo "$row[8]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="relation2" class="col-lg-2 control-label">Parent 2 Relation</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="relation2" value="<?php echo "$row[9]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cellphone2" class="col-lg-2 control-label">Parent 2 Cell Phone</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="cellphone2" value="<?php echo "$row[11]"?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email2" class="col-lg-2 control-label">Parent 2 Email Address</label>
                    <div class="col-lg-10">
                      <input type="text" class="form-control" name="email2" value="<?php echo "$row[12]"?>">
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


