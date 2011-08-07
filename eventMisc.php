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
      <h1>Miscellaneous</h1>
      <?php 
      
      $image[0] = 'images/events/misc/misc.jpg';
      $thumb[0] = 'images/events/misc/misc_small.jpg';
      $image[1] = 'images/events/misc/misc2.jpg';
      $thumb[1] = 'images/events/misc/misc2_small.jpg';
      $image[2] = 'images/events/misc/misc3.jpg';
      $thumb[2] = 'images/events/misc/misc3_small.jpg';
      $image[3] = 'images/events/misc/misc4.jpg';
      $thumb[3] = 'images/events/misc/misc4_small.jpg';
      $image[4] = 'images/events/misc/misc5.jpg';
      $thumb[4] = 'images/events/misc/misc5_small.jpg';
      $image[5] = 'images/events/misc/misc6.jpg';
      $thumb[5] = 'images/events/misc/misc6_small.jpg';
      $image[6] = 'images/events/misc/misc7.jpg';
      $thumb[6] = 'images/events/misc/misc7_small.jpg';
      $image[7] = 'images/events/misc/misc8.jpg';
      $thumb[7] = 'images/events/misc/misc8_small.jpg';
      $image[8] = 'images/events/misc/misc9.jpg';
      $thumb[8] = 'images/events/misc/misc9_small.jpg';
      $image[9] = 'images/events/misc/misc10.jpg';
      $thumb[9] = 'images/events/misc/misc10_small.jpg';
      $image[10] = 'images/events/misc/misc11.jpg';
      $thumb[10] = 'images/events/misc/misc11_small.jpg';
      $image[11] = 'images/events/misc/misc12.jpg';
      $thumb[11] = 'images/events/misc/misc12_small.jpg';
      $image[12] = 'images/events/misc/misc13.jpg';
      $thumb[12] = 'images/events/misc/misc13_small.jpg';
      $image[13] = 'images/events/misc/misc14.jpg';
      $thumb[13] = 'images/events/misc/misc14_small.jpg';
      $image[14] = 'images/events/misc/misc15.jpg';
      $thumb[14] = 'images/events/misc/misc15_small.jpg';
      $image[15] = 'images/events/misc/misc16.jpg';
      $thumb[15] = 'images/events/misc/misc16_small.jpg';
      $image[16] = 'images/events/misc/misc17.jpg';
      $thumb[16] = 'images/events/misc/misc17_small.jpg';
      $image[17] = 'images/events/misc/misc18.jpg';
      $thumb[17] = 'images/events/misc/misc18_small.jpg';
      $image[18] = 'images/events/misc/misc19.jpg';
      $thumb[18] = 'images/events/misc/misc19_small.jpg';
      $image[19] = 'images/events/misc/misc1.jpg';
      $thumb[19] = 'images/events/misc/misc1_small.jpg';
      $image[20] = 'images/events/misc/misc20.jpg';
      $thumb[20] = 'images/events/misc/misc20_small.jpg';
      $image[21] = 'images/events/misc/misc21.jpg';
      $thumb[21] = 'images/events/misc/misc21_small.jpg';
      
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
