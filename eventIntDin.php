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
      <h1>International Dinner</h1>
      <p>
      Formal dinner in West Quad on April 9th, 2010
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/events/internationalDinner/intdin1.jpg';
      $thumb[0] = 'images/events/internationalDinner/intdin1_small.jpg';
      $image[1] = 'images/events/internationalDinner/intdin2.jpg';
      $thumb[1] = 'images/events/internationalDinner/intdin2_small.jpg';
      $image[2] = 'images/events/internationalDinner/intdin3.jpg';
      $thumb[2] = 'images/events/internationalDinner/intdin3_small.jpg';
      $image[3] = 'images/events/internationalDinner/intdin4.jpg';
      $thumb[3] = 'images/events/internationalDinner/intdin4_small.jpg';
      $image[4] = 'images/events/internationalDinner/intdin5.jpg';
      $thumb[4] = 'images/events/internationalDinner/intdin5_small.jpg';
      $image[5] = 'images/events/internationalDinner/intdin6.jpg';
      $thumb[5] = 'images/events/internationalDinner/intdin6_small.jpg';
      $image[6] = 'images/events/internationalDinner/intdin7.jpg';
      $thumb[6] = 'images/events/internationalDinner/intdin7_small.jpg';
      $image[7] = 'images/events/internationalDinner/intdin8.jpg';
      $thumb[7] = 'images/events/internationalDinner/intdin8_small.jpg';
      $image[8] = 'images/events/internationalDinner/intdin9.jpg';
      $thumb[8] = 'images/events/internationalDinner/intdin9_small.jpg';
      $image[9] = 'images/events/internationalDinner/intdin10.jpg';
      $thumb[9] = 'images/events/internationalDinner/intdin10_small.jpg';
      $image[10] = 'images/events/internationalDinner/intdin11.jpg';
      $thumb[10] = 'images/events/internationalDinner/intdin11_small.jpg';
      $image[11] = 'images/events/internationalDinner/intdin12.jpg';
      $thumb[11] = 'images/events/internationalDinner/intdin12_small.jpg';
      $image[12] = 'images/events/internationalDinner/intdin13.jpg';
      $thumb[12] = 'images/events/internationalDinner/intdin13_small.jpg';
      $image[13] = 'images/events/internationalDinner/intdin14.jpg';
      $thumb[13] = 'images/events/internationalDinner/intdin14_small.jpg';
      $image[14] = 'images/events/internationalDinner/intdin15.jpg';
      $thumb[14] = 'images/events/internationalDinner/intdin15_small.jpg';
      $image[15] = 'images/events/internationalDinner/intdin16.jpg';
      $thumb[15] = 'images/events/internationalDinner/intdin16_small.jpg';
      $image[16] = 'images/events/internationalDinner/intdin17.jpg';
      $thumb[16] = 'images/events/internationalDinner/intdin17_small.jpg';
      $image[17] = 'images/events/internationalDinner/intdin18.jpg';
      $thumb[17] = 'images/events/internationalDinner/intdin18_small.jpg';
      $image[18] = 'images/events/internationalDinner/intdin19.jpg';
      $thumb[18] = 'images/events/internationalDinner/intdin19_small.jpg';
      $image[19] = 'images/events/internationalDinner/intdin20.jpg';
      $thumb[19] = 'images/events/internationalDinner/intdin20_small.jpg';
      $image[20] = 'images/events/internationalDinner/intdin21.jpg';
      $thumb[20] = 'images/events/internationalDinner/intdin21_small.jpg';
      $image[21] = 'images/events/internationalDinner/intdin22.jpg';
      $thumb[21] = 'images/events/internationalDinner/intdin22_small.jpg';
      $image[22] = 'images/events/internationalDinner/intdin23.jpg';
      $thumb[22] = 'images/events/internationalDinner/intdin23_small.jpg';
      $image[23] = 'images/events/internationalDinner/intdin24.jpg';
      $thumb[23] = 'images/events/internationalDinner/intdin24_small.jpg';
      $image[24] = 'images/events/internationalDinner/intdin25.jpg';
      $thumb[24] = 'images/events/internationalDinner/intdin25_small.jpg';
      $image[25] = 'images/events/internationalDinner/intdin26.jpg';
      $thumb[25] = 'images/events/internationalDinner/intdin26_small.jpg';
      
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
