<?php require('php/register.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
    <link rel="icon" href="img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
    <link rel="stylesheet" href="css/style1.css?v=<?php echo time(); ?>" />
    <title>Mini Project</title>
  </head>
  <body>
    <div class="car_info_value"><span id="car1_info_value"></span><span id="car2_info_value"></span></div>
    <div class="bg">
      <img src="img/bg.jpg" class="bg" />
      <div class="black"></div>
      <div class="sun"></div>
    </div>
    <div class="container">
      <form method="post" action="dash_index.php">
        <button value="submit" class="dash_btn" name="submit">Dashboard</button>
      </form>
      <div class="road">
        <img src="img/road.jpg" />
      </div>

      <!-- Car 1 with wheel,info and ray  -->
      <div class="car" id="car">
        <img src="img/car.png" class="car_img" />
        <div class="carCam">
          <div class="ray"></div>
          <div class="ray1"></div>
          <div class="ray2"></div>
        </div>
        <div class="wheel">
          <div class="wheel1"><img src="img/wheel.png" /></div>
          <div class="wheel2"><img src="img/wheel.png" /></div>
        </div>
        <div class="info">
          <span>
            <br />
            Vehicle Number: UP37 D 3874<br />Vehicle Code: ABCDE12345</span
          >
        </div>
      </div>

      <!-- Car 2 with wheel,info and ray  -->
      <div class="car2" id="car2">
        <img src="img/car2.png" class="car2_img" />
        <div class="carCam">
          <div class="ray"></div>
          <div class="ray1"></div>
          <div class="ray2"></div>
        </div>
        <div class="wheel">
          <div class="wheel1"><img src="img/wheel2.png" /></div>
          <div class="wheel2"><img src="img/wheel2.png" /></div>
        </div>
        <div class="info2">
          <span>
            <br />
            Vehicle Number: UP14 AT 7636<br />Vehicle Code: PQRST98765</span
          >
        </div>
      </div>
      <div class="pole">
        <!-- Pole 1 with ray -->
        <div class="pole1">
          <span class="pole_no1">Pole 2</span>
          <div class="upper1"></div>
          <div class="light_shadow1"></div>
          <div class="light1"></div>
          <div class="pole_info1">
            <span>Vehicle Detected</span>
          </div>
          <div class="cam1">
            <div class="ray"></div>
            <div class="ray1"></div>
            <div class="ray2"></div>
          </div>
          <div class="footer1"></div>
        </div>
        <div class="distance"><span>1KM</span></div>

        <!-- Pole 2 with ray -->
        <div class="pole2">
          <span class="pole_no2">Pole 1</span>
          <div class="upper2"></div>
          <div class="light_shadow2"></div>
          <div class="light2"></div>
          <div class="pole_info2">
            <span>Vehicle Detected</span>
          </div>
          <div class="cam2">
            <div class="ray"></div>
            <div class="ray1"></div>
            <div class="ray2"></div>
          </div>
          <div class="footer2"></div>
        </div>
      </div>
    </div>
    <!-- onsubmit="return false" -->
    <form method="post" action="php/register.php">
      <button type="submit" name="data_submit" class="data_submit"></button>
    </form>
  </body>
  <script src="js/script.js?v=<?php echo time(); ?>" language="JavaScript" type="text/javascript"></script>
</html>
