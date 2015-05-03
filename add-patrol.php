<?php include('header.php') ?>
<?php require_once('auth.php');?>
<?php require_once('config.php');?>

<body>
<h1>Add Patrol</h1>
<?php include('nav2.php') ?>

          <div class="col-lg-12">
            <div class="well bs-component" data-relatedvars="legend-color,legend-border-color,input-color,input-height-base,input-bg,input-border,input-border-radius,input-border-focus,input-color-placeholder,input-bg-disabled,input-height-small,input-height-large,state-success-text,state-success-bg,state-warning-text,state-warning-bg,state-danger-text,state-danger-bg,input-group-addon-bg,input-group-addon-border-color,input-border-radius-large,input-border-radius-small">
              
              <form class="form-horizontal" method="POST" action="patrol-add.php">
                <fieldset>
                <legend>Patrol Information</legend>
                  <div class="form-group">
                    <label for="patrol_name" class="col-lg-2 control-label">Patrol Name</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="first_name" placeholder="Patrol Name" name="firstname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="patrol_leader" class="col-lg-2 control-label">Patrol Leader</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="patrol_leader" placeholder="Patrol Leader" name="patrol_leader">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="as_patrol_leader" class="col-lg-2 control-label">Assistant Patrol Leader</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="as_patrol_leader" placeholder="Asisstant Patrol Leader" name="as_patrol_leader">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member1" class="col-lg-2 control-label">Member 1</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member1"  placeholder="Member 1" name="member1">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member2" class="col-lg-2 control-label">Member 2</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member2" placeholder="Member 2" name="member2">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member3" class="col-lg-2 control-label">Member 3</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member3" placeholder="Member 3" name="member3">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member4" class="col-lg-2 control-label">Member 4</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member4"  placeholder="Member 4" name="member4">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member5" class="col-lg-2 control-label">Member 5</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member5"  placeholder="Member 5" name="member5">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member6" class="col-lg-2 control-label">Member 6</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member6" placeholder="Member 6" name="member6">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member7" class="col-lg-2 control-label">Member 7</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member7"  placeholder="Member 7" name="member7">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="member8" class="col-lg-2 control-label">Member 8</label>
                    <div class="col-lg-6">
                      <input type="text" class="form-control" id="member8" placeholder="Member 8" name="member8">
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
            </div>
</body>
</html>