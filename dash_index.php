<?php require('php/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart System Dashboard</title>
    <link rel="stylesheet" href="css/dash_style.css" />
  </head>
  <body>
    <div id="container">
      <div id="circle_1"></div>
      <div id="circle_2"></div>
      <form method="post" action="php/connection.php">
        <span>Welcome Admin</span>
        <span class="error"><?php include 'php/connection.php'; 
        If(isset($_GET['error']) && $_GET['error'] == 1){
        echo "Please Enter Correct Vehicle Number";} ?></span>
        <label>Vehicle Number</label>
        <input type="text" name="Veh_no"/>
        <input type="submit" name="search"/>
      </form>
    </div>
  </body>
  <script src="js/dash_script.js"></script>
</html>
