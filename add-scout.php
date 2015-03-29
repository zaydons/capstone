<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Add Scout</h1>
<?php include('nav2.php') ?>

          <div class="col-lg-12">
            <div class="well bs-component" data-relatedvars="legend-color,legend-border-color,input-color,input-height-base,input-bg,input-border,input-border-radius,input-border-focus,input-color-placeholder,input-bg-disabled,input-height-small,input-height-large,state-success-text,state-success-bg,state-warning-text,state-warning-bg,state-danger-text,state-danger-bg,input-group-addon-bg,input-group-addon-border-color,input-border-radius-large,input-border-radius-small">
              <form class="form-horizontal">
                <fieldset>
                  <legend>New Scout</legend>
                  <div class="form-group">
                    <label for="firstname" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="firstname" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="middlename" class="col-lg-2 control-label">Middle Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="middlename" placeholder="Middle Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bsa_id" class="col-lg-2 control-label">BSA ID</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="bsa_id" placeholder="BSA ID">
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
                      <input type="text" class="form-control" id="state" placeholder="State">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="zip" class="col-lg-2 control-label">Zip Code</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="zip" placeholder="Zip Code">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="dob" class="col-lg-2 control-label">Birthday</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="lastname" placeholder="Date of Birth">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="home_phone" class="col-lg-2 control-label">Home Phone</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="home_phone" placeholder="Home Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="cell_phone" class="col-lg-2 control-label">Cell Phone</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="cell_phone" placeholder="Cell Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email1" class="col-lg-2 control-label">Email 1</label>
                    <div class="col-lg-6">
                      <input type="email" class="form-control" id="email1" placeholder="Email 1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email2" class="col-lg-2 control-label">Email 2</label>
                    <div class="col-lg-6">
                      <input type="email" class="form-control" id="email2" placeholder="Email 2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="date_joined" class="col-lg-2 control-label">Date Joined</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="date_joined" placeholder="Date Joined">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="rank" class="col-lg-2 control-label">Rank</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="rank">
                        <option>None</option>
                        <option>Scout</option>
                        <option>Tenderfoot</option>
                        <option>Second Class</option>
                        <option>First Class</option>
                        <option>Star</option>
                        <option>Life</option>
                        <option>Eagle</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="leadership_position" class="col-lg-2 control-label">Leadership Position</label>
                    <div class="col-lg-10">
                      <select class="form-control" id="leadership_position">
                        <option>None</option>
                        <option>Assistant Patrol Leader</option>
                        <option>Assistant Senior Patrol Leader</option>
                        <option>Bugler</option>
                        <option>Chaplain Aide</option>
                        <option>Den Chief</option>
                        <option>Historian</option>
                        <option>Junior Assistant Scoutmaster</option>
                        <option>Leave No Trace Trainer</option>
                        <option>Librarian</option>
                        <option>Order of the Arrow Represenative</option>
                        <option>Patrol Leader</option>
                        <option>Quartermaster</option>
                        <option>Scribe</option>
                        <option>Senior Patrol Leader</option>
                        <option>Troop Guide</option>
                        <option>Webmaster</option>
                      </select>
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
            </div>



</body>
</html>