<!-- AIESEC Michigan Yearbook -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<?php

include $_SERVER['DOCUMENT_ROOT'].'/yearbook/scripts/functions_page.php';
   
$filename = "http://www.aiesecmichigan.com" . $_SERVER["PHP_SELF"];

?>

<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

<!-- CSS link -->
<link rel = stylesheet type = "text/css" href = "style.css">
<!--[if IE]>
<link rel = stylesheet type = "text/css" href = "styleie.css">
<![EndIf]-->
 
<title> AIESEC Michigan - Yearbook</title>

<!-- Favicon link -->
<link REL="SHORTCUT ICON" HREF="images/favicon.ico">

</head>

<body>

<div class = "all">
   <div class = "titlebar">
      <!-- Only a background image here -->
   </div>
   <div class = "navbar">
      <ul class = "nav">
      <li class = "invis">
      <li class = "home"><a href = "index.php"></a> 
      <li class = "teams"><a href = "teams.php"></a>
      <li class = "events"><a href = "events.php"></a>  
      </ul>  
   </div>
   <div class = "content">
      <br>
      <h1>Events</h1>
      <table class = "events" cellpadding = "20">
      <tr>
      <td><a href = "eventRoksF.php" style = "text-decoration: none;"><img src = "images/events/roksFall/rf_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">Fall RoKs</font></a>
      <td><a href = "eventRetHall.php" style = "text-decoration: none;"><img src = "images/events/halloween/h2_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">Halloween Retreat</font></a>
      </td>
      <tr>
      <td><a href = "eventIvogue.php" style = "text-decoration: none;"><img src = "images/events/iVogue/iv1_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">International Vogue</font></a>
      <td><a href = "eventChristmas.php" style = "text-decoration: none;"><img src = "images/events/christmas/c_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">Christmas Party</font></a>
      </tr>
      <tr>
      <td><a href = "eventRoksW.php" style = "text-decoration: none;"><img src = "images/events/roksWinter/rw_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">Winter Roks</font></a>
      <td><a href = "eventIntDin.php" style = "text-decoration: none;"><img src = "images/events/internationalDinner/intdin5_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">International Dinner</font></a>
      </tr>
      <tr>
      <td><a href = "eventMisc.php" style = "text-decoration: none;"><img src = "images/events/misc/misc2_small.jpg" height = "50" width = "50" style = "float: left;" />
          <font style = "position: relative; top: 12px; left: 10px;">Miscellaneous</font></a>
      </tr>
      
      </table>
      <br><br><br><br>
   </div>
   <div class = "bottombar">
       <p style = "position: relative; top: 10px;">&copy; <?php echo date('Y'); ?> AIESEC at the University of Michigan</p>
   </div>
   <div class = "footer">
      <img src = "images/logo.png" style = "position: relative; top: -40px; left: 10px;">
   </div>   
   
</div>

</body>

</html>




