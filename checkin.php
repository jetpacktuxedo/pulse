<!doctype html>
<html>
  <?php include'templates/header.php';?>

  <body>
  <?php include'templates/navbar.php';?>

    <!--BEGIN NORMAL BODY-->
    <div class="container">
      <div class="row">
        
        <!--BEGIN OWNERS -->
        <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>
                  Recent Checkins
                </h4>
              </div>
              <div class="panel-body">  
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Visit ID</th>
                        <th>Owner Name</th>
                        <th>Patient Name</th>
                        <th>Visit Date</th>
                      </tr>
                    </thead>
                    <?php 
                      include'dynamic/recentCheckins.php';
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
              <h4>New Checkins</h4>
            </div>
            <div class="panel-body">
              <form action="dynamic/test.php" method="post" class="form-horizontal">

                <!--Owner First Name Input -->
                <div class="form-group">
                  <label for="ownerFirst" class="col-sm-3 control-label">Owner First Name</label>
                  <div class="col-sm-6">
                    <input class="form-control" id="ownerFirst" placeholder="John" type="text" name="ownerFirst">
                  </div>
                </div>

                <!--Owner Last Name Input -->
                <div class="form-group">
                  <label for="ownerLast" class="col-sm-3 control-label">Owner Last Name</label>
                  <div class="col-sm-6">
                    <input class="form-control" id="ownerLast" placeholder="Smith" type="text" name="ownerLast">
                  </div>
                </div>

                <!--Patient Name Input -->
                <div class="form-group">
                  <label for="patientName" class="col-sm-3 control-label">Patient Name</label>
                  <div class="col-sm-6">
                    <input class="form-control" id="patientName" placeholder="Fluffy" type="text" name="patientName">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-6 col-sm-offset-3">
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
