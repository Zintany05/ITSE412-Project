<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- box icon usage as a font  -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>Everest Dashboard</title>
</head>
<body>
    <div class="main-container">
<!-- Start of Side Bar -->

<div class="sidebar" id="side-bar">
    <div class="top-sidebar">
        <div class="logo">
                <span>Everest</span>
        </div>
    </div>
    <div class="user">Porfile pic will be here</div>
    <ul class="nav-links">
        <li><a href="#">Contact us</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Everest at Night</a></li>
        <li><a href="#">logout</a></li>
    </ul>
</div>

<!-- End of Side Bar -->

 <!-- start of Dashboar -->
  <div class="dashboard">
    <div id="calendar">
<!-- we will be keeping this empty and use java script to tell the calendar to show up inside this div  -->
    </div>
    <div id="day-details">
        <!-- this is what will apear when we press on the calendar  -->
    </div>

  </div>
  <!-- End of Dashboard -->
   

  </div>

  <script src="js/libs/index.global.min.js"></script>  
  <script src="js/dashboard.js"></script>
  <link rel="stylesheet" href="css/dashboard.css">
</body>
</html>