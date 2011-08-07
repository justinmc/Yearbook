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
      <h1>Event Coordination</h1>
      <img src = "images/teams/ec/sarah&roberto.jpg">
      <br /><br />
      <p class = "teamPL">
      The focus of AIESEC events this year was publicizing AIESEC's name on campus and bringing the LC together,
      with an international or multicultural focus.  The Events Coordination team had a lot of fun organizing 
      these events and getting to know our new members.
      <br /><br /><br />
      good luck next year!
      <br /><br />
      -Sarah
      </p>
      <p class = "teamPR">
      Even though it was only a semester, we're glad we found some incredible newbies and we wish them luck in 
      their teams next year!
      <br /><br /><br />
      --
      <br />
      Roberto
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/teams/ec/amelia.jpg';
      $thumb[0] = 'images/teams/ec/amelia_small.jpg';
      $name[0] = 'Amelia Ruslim';
      $image[1] = 'images/teams/ec/danielle.jpg';
      $thumb[1] = 'images/teams/ec/danielle_small.jpg';
      $name[1] = 'Danielle Taubman';
      $image[2] = 'images/teams/ec/jing.jpg';
      $thumb[2] = 'images/teams/ec/jing_small.jpg';
      $name[2] = 'Jing Guo';
      $image[3] = 'images/teams/ec/lily.jpg';
      $thumb[3] = 'images/teams/ec/lily_small.jpg';
      $name[3] = 'Lily Wong';
      $image[4] = 'images/teams/ec/melissa.jpg';
      $thumb[4] = 'images/teams/ec/melissa_small.jpg';
      $name[4] = 'Melissa Halpert';
      $image[5] = 'images/teams/ec/parinita.jpg';
      $thumb[5] = 'images/teams/ec/parinita_small.jpg';
      $name[5] = 'Parinita Jain';
      $image[6] = 'images/teams/ec/stephchang.jpg';
      $thumb[6] = 'images/teams/ec/stephchang_small.jpg';
      $name[6] = 'Stephany Chang';
      
      @picTable($image, $thumb, $name);
      
      ?>      
      <br /><br /><br />
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
