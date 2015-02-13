<!doctype html>
<html>
  <?php include'templates/header.php';?>

  <body>
  <?php include'templates/navbar.php';?>

    <!--BEGIN NORMAL BODY-->
    <div class="container">
      <div class="row">
        
        <!--BEGIN RECENT PATIENTS-->
        <div class="col-md-6">
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
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>New Patient</h4>
            </div>
            <div class="panel-body">
              <form action="dynamic/test.php" method="post" class="form-horizontal">

                <!--Owner First Name Input -->
                <div class="form-group">
                  <label for="ownerFirst" class="col-lg-3 control-label">Owner First Name</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="ownerFirst" placeholder="John" type="text" name="ownerFirst">
                  </div>
                </div>

                <!--Owner Last Name Input -->
                <div class="form-group">
                  <label for="ownerLast" class="col-lg-3 control-label">Owner Last Name</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="ownerLast" placeholder="Smith" type="text" name="ownerLast">
                  </div>
                </div>

                <!--Owner Email Input -->
                <div class="form-group">
                  <label for="ownerEmail" class="col-lg-3 control-label">Owner Email</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="ownerEmail" placeholder="jsmith@hotmail.com" type="text" name="ownerEmail">
                  </div>
                </div>

                <!--Patient Name Input -->
                <div class="form-group">
                  <label for="patientName" class="col-lg-3 control-label">Patient Name</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="patientName" placeholder="Fluffy" type="text" name="patientName">
                  </div>
                </div>

                <!--Patient Weight Input -->
                <div class="form-group">
                  <label for="patientWeight" class="col-lg-3 control-label">Patient Weight</label>
                  <div class="col-lg-4">
                    <input class="form-control" id="patientWeight" placeholder="Weight" type="text" name="patientWeight">
                  </div>

                  <div class="col-lg-2">
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
                    <div class="radio"><label><input name="speciesRadio" id="optionsRadios1" value="dog" checked="" type="radio">Dog</label></div>
                    <div class="radio"><label><input name="speciesRadio" id="optionsRadios2" value="cat" type="radio">Cat</label></div>
                    <div class="radio"><label><input name="speciesRadio" id="optionsRadios3" value="rat" type="radio">Rat</label></div>
                    <div class="radio"><label><input name="speciesRadio" id="optionsRadios4" value="horse" type="radio">Horse</label></div>
                    <div class="radio"><label><input name="speciesRadio" id="optionsRadios5" value="cow" type="radio">Cow</label></div>
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
