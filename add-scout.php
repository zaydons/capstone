<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Add Scout</h1>
<?php include('nav2.php') ?>

          <div class="col-lg-12">
            <div class="well bs-component" data-relatedvars="legend-color,legend-border-color,input-color,input-height-base,input-bg,input-border,input-border-radius,input-border-focus,input-color-placeholder,input-bg-disabled,input-height-small,input-height-large,state-success-text,state-success-bg,state-warning-text,state-warning-bg,state-danger-text,state-danger-bg,input-group-addon-bg,input-group-addon-border-color,input-border-radius-large,input-border-radius-small">
              <form class="form-horizontal" method="post" action="scout-add.php">
                <fieldset>
                  <legend>Scout Information</legend>
                  <div class="form-group">
                    <label for="first_name" class="col-lg-2 control-label">First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_name" placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="middle_name" class="col-lg-2 control-label">Middle Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="middle_name" placeholder="Middle Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-lg-2 control-label">Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bsa_id" class="col-lg-2 control-label">BSA ID</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="bsa_id" maxlength="11" placeholder="BSA ID">
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
                    <label for="dob" class="col-lg-2 control-label">Birthday</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="dob" placeholder="Date of Birth">
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
                        <option value="None">None</option>
                        <option value="Scout">Scout</option>
                        <option value="Tenderfoot">Tenderfoot</option>
                        <option value="Second Class">Second Class</option>
                        <option value="First Class">First Class</option>
                        <option value="Star">Star</option>
                        <option value="Life">Life</option>
                        <option value="Eagle">Eagle</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="rank_date" class="col-lg-2 control-label">Rank Date</label>
                    <div class="col-lg-6">
                      <input type="date" class="form-control" id="rank_date" placeholder="Rank Date">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="leadership_position" class="col-lg-2 control-label">Leadership Position</label>
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
                    </div>
                  </div>
                  <hr>
                  <legend>Parent 1 Information</legend>
                  <div class="form-group">
                    <label for="parent1_firstname" class="col-lg-2 control-label">Parent 1 First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent1_firstname" placeholder="Parent 1 First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent1_lastname" class="col-lg-2 control-label">Parent 1 Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent1_lastname" placeholder="Parent 1 Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent1_relation" class="col-lg-2 control-label">Parent 1 Relation</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent1_relation" placeholder="Parent 1 Relation">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent1_homephone" class="col-lg-2 control-label">Parent 1 Home Phone </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent1_homephone" placeholder="Parent 1 Home Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent1_cellphone" class="col-lg-2 control-label">Parent 1 Cell Phone</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent1_cellphone" placeholder="Parent 1 Cell Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent1_email" class="col-lg-2 control-label">Parent 1 Email</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent1_email" placeholder="Parent 1 Email">
                    </div>
                  </div>
                  <hr>
                  <legend>Parent 2 Information</legend>
                  <div class="form-group">
                    <label for="parent2_firstname" class="col-lg-2 control-label">Parent 2 First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent2_firstname" placeholder="Parent 2 First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent2_lastname" class="col-lg-2 control-label">Parent 2 Last Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent2_lastname" placeholder="Parent 2 Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent2_relation" class="col-lg-2 control-label">Parent 2 Relation</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent2_relation" placeholder="Parent 2 Relation">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent2_homephone" class="col-lg-2 control-label">Parent 2 Home Phone </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent2_homephone" placeholder="Parent 2 Home Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent2_cellphone" class="col-lg-2 control-label">Parent 2 Cell Phone</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent2_cellphone" placeholder="Parent 2 Cell Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="parent2_email" class="col-lg-2 control-label">Parent 2 Email</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="parent2_email" placeholder="Parent 2 Email">
                    </div>
                  </div>
                  <hr>
                  <legend>Emergency Contact Information</legend>
                  <div class="form-group">
                    <label for="emergency1_firstname" class="col-lg-2 control-label">Emergency Contact 1 First Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="emergency1_firstname" placeholder="Emergency Contact 1 First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency1_lastname" class="col-lg-2 control-label">Emergency Contact 1 Last Name </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="emergency1_lastname" placeholder="Emergency Contact 2 Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency1_phone" class="col-lg-2 control-label">Emergency Contact 1 Phone Number </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="emergency1_phone" placeholder="Emergency Contact 2 Phone Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency2_firstname" class="col-lg-2 control-label">Emergency Contact 2 First Name </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="emergency2_firstname" placeholder="Emergency Contact 2 First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency2_lastname" class="col-lg-2 control-label">Emergency Contact 2 Last Name </label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="emergency2_lastname" placeholder="Emergency Contact 2 Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="emergency2_phone" class="col-lg-2 control-label">Emergency Contact 2 Phone Number</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="emergency2_phone" placeholder="Emergency Contact 2 Phone Number">
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