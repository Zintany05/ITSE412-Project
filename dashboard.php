<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Everest Dashboard</title>
</head>
<body>
    
<!-- Start of header  -->
 <div class="header">
     <div id="logo">Everest</div>
     <div class="left-links">
        <ul>
            <li><a href="#">login</a></li>
            <li><a href="#">Information</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
     </div>
 </div>
 <!-- End of header  -->

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
   

  <script src="js/libs/index.global.min.js"></script>  
  <script src="js/dashboard.js"></script>
  <link rel="stylesheet" href="css/dashboard.css">
</body>
</html>