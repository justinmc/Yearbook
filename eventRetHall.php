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
      <h1>Halloween Retreat</h1>
      <p>
      LC Retreat on October 22nd, 2009
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/events/halloween/h.jpg';
      $thumb[0] = 'images/events/halloween/h_small.jpg';
      $image[1] = 'images/events/halloween/h2.jpg';
      $thumb[1] = 'images/events/halloween/h2_small.jpg';
      $image[2] = 'images/events/halloween/h3.jpg';
      $thumb[2] = 'images/events/halloween/h3_small.jpg';
      $image[3] = 'images/events/halloween/h4.jpg';
      $thumb[3] = 'images/events/halloween/h4_small.jpg';
      $image[4] = 'images/events/halloween/h5.jpg';
      $thumb[4] = 'images/events/halloween/h5_small.jpg';
      $image[5] = 'images/events/halloween/h6.jpg';
      $thumb[5] = 'images/events/halloween/h6_small.jpg';
      $image[6] = 'images/events/halloween/h8.jpg';
      $thumb[6] = 'images/events/halloween/h8_small.jpg';
      $image[7] = 'images/events/halloween/h9.jpg';
      $thumb[7] = 'images/events/halloween/h9_small.jpg';
      $image[8] = 'images/events/halloween/h1.jpg';
      $thumb[8] = 'images/events/halloween/h1_small.jpg';
      
      @picTable($image, $thumb);
      ?>
      <br><br><br><br>

      <div class = "comment">
      <br><br>
      <img src = "images/comments.jpg" alt = "" style = "position: relative; left: 10px;"><br><br>
         <div class = "commentTop"><!-- Comment fancy top --></div>
         <br><br>
<?php 

comments($filename); 

?>
         <br><br><br>
         <div class = "commentBot"><!-- Comment fancy bottom --></div>
      </div>
      <br><br>
      <form method = "post" action = "http://www.aiesecmichigan.com/yearbook/update.php" style = "text-align: left;">
      Name:<br>
      <input type = "text" name = "name" id = "name"><br><br>
      Comment:<br>
      <textarea name="comment" id = "comment" rows="10" cols="30"></textarea><br><br>
      Password:<br>
      <input type = "password" id = "passwordC" name = "passwordC">
      <input type = "hidden" name = "address" id = "address" value = "<?php echo $filename; ?>"><br><br><br>
      <input type = "submit" value = "Submit">
      </form>
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
