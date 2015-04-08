<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Add Leader</h1>
<?php include('nav2.php') ?>

          <div class="col-lg-12">
            <div class="well bs-component" data-relatedvars="legend-color,legend-border-color,input-color,input-height-base,input-bg,input-border,input-border-radius,input-border-focus,input-color-placeholder,input-bg-disabled,input-height-small,input-height-large,state-success-text,state-success-bg,state-warning-text,state-warning-bg,state-danger-text,state-danger-bg,input-group-addon-bg,input-group-addon-border-color,input-border-radius-large,input-border-radius-small">
              <form class="form-horizontal" method="post" action="leader-add.php">
                <fieldset>
                  <legend>Leader Information</legend>
                  <div class="form-group">
                    <label for="firstname" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="firstname" placeholder="First Name">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="lastname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="address" class="col-lg-2 control-label">Address</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="address" placeholder="Address">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="city" class="col-lg-2 control-label">City</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="state" class="col-lg-2 control-label">State</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="state" maxlength="2" placeholder="State">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="zip" class="col-lg-2 control-label">Zip Code</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="zip" maxlength="5" placeholder="Zip Code">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="home_phone" class="col-lg-2 control-label">Home Phone</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="home_phone" maxlength="10" placeholder="Home Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cell_phone" class="col-lg-2 control-label">Cell Phone</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="cell_phone" maxlength="10" placeholder="Cell Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-6">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="position" class="col-lg-2 control-label">Position</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="position" placeholder="Position">
                    </div>
                  </div>
<!--                   
                <hr>
                  <legend>Trainings</legend>
                  <div class="form-group">
                    <label for="youth_protection" class="col-lg-2 control-label">Youth Protection</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="youth_protection" placeholder="Youth Protection">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="venturing_youth_protection" class="col-lg-2 control-label">Venturing Youth Protection</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="venturing_youth_protection" placeholder="Venturing Youth Protection">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="safe_swim" class="col-lg-2 control-label">Safe Swim</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="safe_swim" placeholder="Safe Swim">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="safety_afloat" class="col-lg-2 control-label">Safety Afloat</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="safety_afloat" placeholder="Safety Afloat">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="physical_wellness" class="col-lg-2 control-label">Physical Wellness</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="physical_wellness" placeholder="Physical Wellness">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="weather_hazards" class="col-lg-2 control-label">Weather Hazards</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="weather_hazards" placeholder="Weather Hazards">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="climb_safely" class="col-lg-2 control-label">Climb Safely</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="climb_safely" placeholder="Climb Safely">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="trek_safely" class="col-lg-2 control-label">Trek Safely</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="trek_safely" placeholder="Trek Safely">
                    </div>
                  </div> -->
                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <!-- <button class="btn btn-default">Cancel</button> -->
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>

</body>
</html>