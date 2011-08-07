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
      <h1>International Vogue</h1>
      <p>
      International fashion show in East Hall on November 19th, 2009
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/events/iVogue/iv.jpg';
      $thumb[0] = 'images/events/iVogue/iv_small.jpg';
      $image[1] = 'images/events/internationalDinner/intdin2.jpg';
      $thumb[1] = 'images/events/iVogue/iv2_small.jpg';
      $image[2] = 'images/events/iVogue/iv3.jpg';
      $thumb[2] = 'images/events/iVogue/iv3_small.jpg';
      $image[3] = 'images/events/iVogue/iv4.jpg';
      $thumb[3] = 'images/events/iVogue/iv4_small.jpg';
      $image[4] = 'images/events/iVogue/iv5.jpg';
      $thumb[4] = 'images/events/iVogue/iv5_small.jpg';
      $image[5] = 'images/events/iVogue/iv6.jpg';
      $thumb[5] = 'images/events/iVogue/iv6_small.jpg';
      $image[6] = 'images/events/iVogue/iv7.jpg';
      $thumb[6] = 'images/events/iVogue/iv7_small.jpg';
      $image[7] = 'images/events/iVogue/iv8.jpg';
      $thumb[7] = 'images/events/iVogue/iv8_small.jpg';
      $image[8] = 'images/events/iVogue/iv9.jpg';
      $thumb[8] = 'images/events/iVogue/iv9_small.jpg';
      $image[9] = 'images/events/iVogue/iv10.jpg';
      $thumb[9] = 'images/events/iVogue/iv10_small.jpg';
      $image[10] = 'images/events/iVogue/iv11.jpg';
      $thumb[10] = 'images/events/iVogue/iv11_small.jpg';
      $image[11] = 'images/events/iVogue/iv12.jpg';
      $thumb[11] = 'images/events/iVogue/iv12_small.jpg';
      $image[12] = 'images/events/iVogue/iv13.jpg';
      $thumb[12] = 'images/events/iVogue/iv13_small.jpg';
      $image[13] = 'images/events/iVogue/iv14.jpg';
      $thumb[13] = 'images/events/iVogue/iv14_small.jpg';
      $image[14] = 'images/events/iVogue/iv15.jpg';
      $thumb[14] = 'images/events/iVogue/iv15_small.jpg';
      $image[15] = 'images/events/iVogue/iv16.jpg';
      $thumb[15] = 'images/events/iVogue/iv16_small.jpg';
      $image[16] = 'images/events/iVogue/iv17.jpg';
      $thumb[16] = 'images/events/iVogue/iv17_small.jpg';
      $image[17] = 'images/events/iVogue/iv18.jpg';
      $thumb[17] = 'images/events/iVogue/iv18_small.jpg';
      $image[18] = 'images/events/iVogue/iv19.jpg';
      $thumb[18] = 'images/events/iVogue/iv19_small.jpg';
      $image[19] = 'images/events/iVogue/iv20.jpg';
      $thumb[19] = 'images/events/iVogue/iv20_small.jpg';
      $image[20] = 'images/events/iVogue/iv21.jpg';
      $thumb[20] = 'images/events/iVogue/iv21_small.jpg';
      $image[21] = 'images/events/iVogue/iv22.jpg';
      $thumb[21] = 'images/events/iVogue/iv22_small.jpg';
      $image[22] = 'images/events/iVogue/iv23.jpg';
      $thumb[22] = 'images/events/iVogue/iv23_small.jpg';
      $image[23] = 'images/events/iVogue/iv24.jpg';
      $thumb[23] = 'images/events/iVogue/iv24_small.jpg';
      $image[24] = 'images/events/iVogue/iv25.jpg';
      $thumb[24] = 'images/events/iVogue/iv25_small.jpg';
      
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
