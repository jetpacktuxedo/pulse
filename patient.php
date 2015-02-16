<!doctype html>
<html>
  <?php include'templates/header.php';?>

  <body>
  <?php include'templates/navbar.php';?>

    <!--BEGIN NORMAL BODY-->
    <div class="container">
      <div class="row">
        
        <!--BEGIN RECENT PATIENTS-->
        <div class="col-md-7">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>
                  Recent Patients
                </h4>
              </div>
              <div class="panel-body">  
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Owner Name</th>
                        <th>Patient Name</th>
                        <th>Patient Weight</th>
                        <th>Patient Breed</th>
                      </tr>
                    </thead>
                    <?php 
                      include'dynamic/recentPatients.php';
                    ?>
                </table>
              </div>
            </div> 
        </div>
        <!--END RECENT PATIENTS-->

        <!--BEGIN NEW PATIENT-->
        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>New Patient</h4>
            </div>
            <div class="panel-body">
              <form action="dynamic/test.php" method="post" class="form-horizontal">

                <!--Patient Name Input -->
                <div class="form-group">
                  <label for="patientName" class="col-lg-3 control-label">Patient Name</label>
                  <div class="col-lg-8">
                    <input class="form-control" id="patientName" placeholder="Fluffy" type="text" name="patientName">
                  </div>
                </div>

                <!--Patient Weight Input -->
                <div class="form-group">
                  <label for="patientWeight" class="col-lg-3 control-label">Patient Weight</label>
                  <div class="col-lg-5">
                    <input class="form-control" id="patientWeight" placeholder="Weight" type="text" name="patientWeight">
                  </div>

                  <div class="col-lg-3">
                    <select class="form-control" name="weightType">
                      <option>kg</option>
                      <option>lbs</option>
                    </select>
                  </div>
                </div>

                <!--Owner First Name Input -->
                <div class="form-group">
                  <label class="col-lg-3 control-label">Sex</label>
                  <div class="col-lg-6">
                    <div class="radio-inline"><label><input name="sexRadio" id="sexradiom" value="male" checked="" type="radio">Male</label></div>
                    <div class="radio-inline"><label><input name="sexRadio" id="sexradiof" value="female" type="radio">Female</label></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Species</label>
                  <div class="col-lg-3">
                    <select class="form-control" name="Species">
                      <option>Dog</option>
                      <option>Cat</option>
                      <option>Rat</option>
                      <option>Hamster</option>
                      <option>Cow</option>
                      <option>Horse</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-lg-6 col-lg-offset-3">
                    <button class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--END NEW PATIENT-->

      </div>
    </div>

  <script type="text/javascript" src="table.js"></script>
  </body>

</html>
