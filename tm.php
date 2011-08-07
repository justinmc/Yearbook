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
      <h1>Talent Management</h1>
      <img src = "images/teams/tm/dipika.jpg">
      <br /><br />
      <p style = "text-align: left;">
      The first year of TM was more eventful than the malls the night before Christmas. With a small 
      but strong team of four members, TM was able to work creatively to lead AIESEC Michigan's members 
      in the direction that they wanted to go, while ensuring that organization's mission was being 
      fulfilled. TM has a extremely bright future ahead!
      <br /><br /><br />
      DPK
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/teams/tm/liting.jpg';
      $thumb[0] = 'images/teams/tm/liting_small.jpg';
      $name[0] = 'Liting Chen';
      $image[1] = 'images/teams/tm/cristabel.jpg';
      $thumb[1] = 'images/teams/tm/cristabel_small.jpg';
      $name[1] = 'Cristabel Choong';
      $image[2] = 'images/teams/tm/melissa.jpg';
      $thumb[2] = 'images/teams/tm/melissa_small.jpg';
      $name[2] = 'Melissa Nacy';
      
      @picTable($image, $thumb, $name);
      
      $image[0] = 'images/teams/tm/tm.jpg';
      $thumb[0] = 'images/teams/tm/tm_small.jpg';
      $image[1] = 'images/teams/tm/tm1.jpg';
      $thumb[1] = 'images/teams/tm/tm1_small.jpg';
      $image[2] = 'images/teams/tm/tm2.jpg';
      $thumb[2] = 'images/teams/tm/tm2_small.jpg';
      $image[3] = 'images/teams/tm/tm3.jpg';
      $thumb[3] = 'images/teams/tm/tm3_small.jpg';
      $image[4] = 'images/teams/tm/tm4.jpg';
      $thumb[4] = 'images/teams/tm/tm4_small.jpg';
      $image[5] = 'images/teams/tm/tm5.jpg';
      $thumb[5] = 'images/teams/tm/tm5_small.jpg';
      $image[6] = 'images/teams/tm/tm6.jpg';
      $thumb[6] = 'images/teams/tm/tm6_small.jpg';
      $image[7] = 'images/teams/tm/tm7.jpg';
      $thumb[7] = 'images/teams/tm/tm7_small.jpg';
      $image[8] = 'images/teams/tm/tm8.jpg';
      $thumb[8] = 'images/teams/tm/tm8_small.jpg';
      $image[9] = 'images/teams/tm/tm9.jpg';
      $thumb[9] = 'images/teams/tm/tm9_small.jpg';
      $image[10] = 'images/teams/tm/tm11.jpg';
      $thumb[10] = 'images/teams/tm/tm11_small.jpg';
      $image[11] = 'images/teams/tm/tm10.jpg';
      $thumb[11] = 'images/teams/tm/tm10_small.jpg';
      
      @picTable($image, $thumb);
      
      ?>
      <br><br><br>
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
