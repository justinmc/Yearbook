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
      <h1>Teams</h1>
      <a href = "bd.php"><img style = "float: left;" src = "images/teamBD.jpg">
      <h2>Business Development</h2></a>
      <br clear = "all"><br>
      <a href = "ec.php"><img style = "float: left;" src = "images/teamEC.jpg">
      <h2>Event Coordination</h2></a>
      <br clear = "all"><br>
      <a href = "er.php"><img style = "float: left;" src = "images/teamER.jpg">
      <h2>External Relations</h2></a>
      <br clear = "all"><br>
      <a href = "fl.php"><img style = "float: left;" src = "images/teamF&L.jpg">
      <h2>Finance and Logistics</h2></a>
      <br clear = "all"><br>
      <a href = "ogx.php"><img style = "float: left;" src = "images/teamOGX.jpg">
      <h2>Outgoing Exchange</h2></a>
      <br clear = "all"><br>
      <a href = "tm.php"><img style = "float: left;" src = "images/teamTM.jpg">
      <h2>Talent Management</h2></a>
      <br clear = "all"><br>
      <a href = "lcp.php"><img style = "float: left;" src = "images/teams/lcp/ben_small.jpg">
      <h2>LCP</h2></a>
      <br clear = "all"><br>
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




