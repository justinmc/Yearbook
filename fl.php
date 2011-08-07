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
      <h1>Finance and Logistics</h1>
      <img src = "images/teams/f&l/jess&patrick.jpg">
      <br /><br />
      <!--  
      <p style = "text-align: left;">
      VP message.  The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
      The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
      The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
      The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
      The quick brown fox jumps over the lazy dog.  The quick brown fox jumps over the lazy dog.
      </p>
      -->
      <br />
      <?php 
      
      $image[0] = 'images/teams/f&l/lisa.jpg';
      $thumb[0] = 'images/teams/f&l/lisa_small.jpg';
      $name[0] = 'Lisa Kudo';
      $image[1] = 'images/teams/f&l/mike.jpg';
      $thumb[1] = 'images/teams/f&l/mike_small.jpg';
      $name[1] = 'Mike LaCivita';
      $image[2] = 'images/teams/f&l/bill.jpg';
      $thumb[2] = 'images/teams/f&l/bill_small.jpg';
      $name[2] = 'Bill Mueller';
      $image[3] = 'images/teams/f&l/ellie.jpg';
      $thumb[3] = 'images/teams/f&l/ellie_small.jpg';
      $name[3] = 'Ellie Wang';
      $image[4] = 'images/teams/f&l/fan.jpg';
      $thumb[4] = 'images/teams/f&l/fan_small.jpg';
      $name[4] = 'Fan Xiao';
      $image[5] = 'images/teams/f&l/lindy.jpg';
      $thumb[5] = 'images/teams/f&l/lindy_small.jpg';
      $name[5] = 'Lindy Zhang';
      
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
