<!doctype html>
<html>
  <head>
    <title>Pulse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#2196F3">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link href="paper.css" rel="stylesheet">
    <link href="more.css" rel="stylesheet">
    <style>
      Body{
      padding-top: 100px;
      padding-bottom:50px;
        }
    </style>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  </head>

  <body>
    <!--BEGIN NAVBAR-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pulse</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Search Patients" class="form-control nav-form-control">
            </div>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!--END NAVBAR-->    

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
                      include'recentPatients.php';
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
              <form class="form-horizontal">

                <!--Owner First Name Input -->
                <div class="form-group">
                  <label for="ownerFirst" class="col-lg-3 control-label">Owner First Name</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="patientName" placeholder="John" type="text">
                  </div>
                </div>

                <!--Owner Last Name Input -->
                <div class="form-group">
                  <label for="ownerLast" class="col-lg-3 control-label">Owner Last Name</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="patientName" placeholder="Smith" type="text">
                  </div>
                </div>

                <!--Owner Email Input -->
                <div class="form-group">
                  <label for="ownerEmail" class="col-lg-3 control-label">Owner Email</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="patientName" placeholder="jsmith@hotmail.com" type="text">
                  </div>
                </div>

                <!--Patient Name Input -->
                <div class="form-group">
                  <label for="patientName" class="col-lg-3 control-label">Patient Name</label>
                  <div class="col-lg-6">
                    <input class="form-control" id="patientName" placeholder="Fluffy" type="text">
                  </div>
                </div>

                <!--Patient Weight Input -->
                <div class="form-group">
                  <label for="patientWeight" class="col-lg-3 control-label">Patient Weight</label>
                  <div class="col-lg-4">
                    <input class="form-control" id="patientWeight" placeholder="Weight" type="text">
                  </div>

                  <div class="col-lg-2">
                    <select class="form-control">
                      <option>kg</option>
                      <option>lbs</option>
                    </select>
                  </div>
                </div>

                <!--Owner First Name Input -->
                <div class="form-group">
                  <label class="col-lg-3 control-label">Sex</label>
                  <div class="col-lg-6">
                    <div class="radio-inline"><label><input name="optionsRadios" id="sexradiom" value="male" checked="" type="radio">Male</label></div>
                    <div class="radio-inline"><label><input name="optionsRadios" id="sexradiof" value="female" type="radio">Female</label></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-3 control-label">Species</label>
                  <div class="col-lg-3">
                    <div class="radio"><label><input name="optionsRadios" id="optionsRadios1" value="dog" checked="" type="radio">Dog</label></div>
                    <div class="radio"><label><input name="optionsRadios" id="optionsRadios2" value="cat" type="radio">Cat</label></div>
                    <div class="radio"><label><input name="optionsRadios" id="optionsRadios3" value="rat" type="radio">Rat</label></div>
                    <div class="radio"><label><input name="optionsRadios" id="optionsRadios4" value="horse" type="radio">Horse</label></div>
                    <div class="radio"><label><input name="optionsRadios" id="optionsRadios5" value="cow" type="radio">Cow</label></div>
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
