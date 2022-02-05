<?php 
    require('php/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$_SESSION[veh_no]"; ?></title>
    <link rel="stylesheet" href="css/dash_style1.css" />

</head>
<body>
  <form action="php/connection.php" method="post">
  <div class="btn">
    <input name="logout" type="submit" class="btn_design" value="LogOut">
  </div>
  </form>

<section>
  <h1>Vehicle Information</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr>
          <th>Vehicle Number</th>
          <th>Name</th>
          <th>Address</th>
          <th>Mobile Number</th>
          <th>Email</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td><?php echo "$_SESSION[veh_no]"; ?></td>
          <td><?php echo "$_SESSION[own_name]"; ?></td>
          <td><?php echo "$_SESSION[own_add]"; ?></td>
          <td><?php echo "$_SESSION[own_mob]"; ?></td>
          <td><?php echo "$_SESSION[own_email]"; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="tbl-header">
  <tbody>
    <table cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td>Payment</td>
        <td>Vehicle Information</td>
        <td>Starting Point</td>
        <td>End Point/Current Location</td>
      </tr>
    </tbody>
  </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <td><?php echo "$_SESSION[payment]"; ?></td>
          <td><?php echo "$_SESSION[veh_info]"; ?></td>
          <td><?php echo "$_SESSION[start_point]"; ?></td>
          <td><?php echo "$_SESSION[end_point]"; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
</section>

</body>
</html>