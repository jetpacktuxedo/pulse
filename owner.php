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
                  Recent Owners
                </h4>
              </div>
              <div class="panel-body">  
                  <table class="table table-striped table-hover ">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Owner Name</th>
                        <th>Owner Email</t>
                      </tr>
                    </thead>
                    <?php 
                      include'dynamic/recentOwners.php';
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

                <!--Owner Email Input -->
                <div class="form-group">
                  <label for="ownerEmail" class="col-sm-3 control-label">Owner Email</label>
                  <div class="col-sm-6">
                    <input class="form-control" id="ownerEmail" placeholder="jsmith@hotmail.com" type="text" name="ownerEmail">
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
