<html>
  <body>

    Welcome 
    <?php 
      echo $_POST["ownerFirst"];
      echo " ";
      echo $_POST["ownerLast"];
      echo " and ";
      echo $_POST["patientName"];
    ?>
    <br>
    Your email address is: 
    <?php 
      echo $_POST["ownerEmail"]; 
    ?>

  </body>
</html>
