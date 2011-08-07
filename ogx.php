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
      <h1>Outgoing Exchange</h1>
      <img src = "images/teams/ogx/grayson.jpg">
      <br /><br /><br />
      <p style = "text-align: left; text-indent: 0;">
      To the OGX 11 --<br />
      </p>
      <p style = "text-align: left;">
      Thank you for an incredible year of AIESEC.  I hope everyone learned as much about 
      themselves this year as I did and at the same time made an e-friend or two in some 
      bizarre time zone.  To the recently graduated newbies - thank you for your fresh perspective 
      on things & dive in deeper next year.  To those who I recruited to a non-team at the 
      beginning of the year - your guys hard work first semester made things what they were 
      this spring.  To China - thanks for sending us your OGXers, we'll keep them.  To 
      Alena - thanks for coming back.  Don't hesitate to challenge yourselves and keep 
      pushing the envelope.  Don't stop dominating.
      <br /><br /><br />
      Grayson
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/teams/ogx/allen.jpg';
      $thumb[0] = 'images/teams/ogx/allen_small.jpg';
      $name[0] = 'Yixiao (Allen) Zhang';
      $image[1] = 'images/teams/ogx/chloe.jpg';
      $thumb[1] = 'images/teams/ogx/chloe_small.jpg';
      $name[1] = 'Chloe Ziyi Lou';
      $image[2] = 'images/teams/ogx/fiona.jpg';
      $thumb[2] = 'images/teams/ogx/fiona_small.jpg';
      $name[2] = 'Fiona Tang';
      $image[3] = 'images/teams/ogx/gisele.jpg';
      $thumb[3] = 'images/teams/ogx/gisele_small.jpg';
      $name[3] = 'Gisele Papo';
      $image[4] = 'images/teams/ogx/jordan.jpg';
      $thumb[4] = 'images/teams/ogx/jordan_small.jpg';
      $name[4] = 'Jordan Serra';
      $image[5] = 'images/teams/ogx/marco.jpg';
      $thumb[5] = 'images/teams/ogx/marco_small.jpg';
      $name[5] = 'Marco Ying';
      $image[6] = 'images/teams/ogx/marissa.jpg';
      $thumb[6] = 'images/teams/ogx/marissa_small.jpg';
      $name[6] = 'Marissa Gawel';
      $image[7] = 'images/teams/ogx/nadia.jpg';
      $thumb[7] = 'images/teams/ogx/nadia_small.jpg';
      $name[7] = 'Nadia Hasan';
      $image[8] = 'images/teams/ogx/preciosa.jpg';
      $thumb[8] = 'images/teams/ogx/preciosa_small.jpg';
      $name[8] = 'Preciosa Choi';
      $image[9] = 'images/teams/ogx/alena.jpg';
      $thumb[9] = 'images/teams/ogx/alena_small.jpg';
      $name[9] = 'Alena Gerasimova';
      
      @picTable($image, $thumb, $name);
      
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
