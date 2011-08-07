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
      <h1>External Relations</h1>
      <img src = "images/teams/er/katie.jpg">
      <br /><br />
      <p style = "text-align: left;">
      External Relations Team has been contacting and continuing connections with University departments 
      such as Organizational Studies, International Minor in Engineering, Global Scholars Program, 
      International Center, and French Department. We are also in the process of creating a recruitment 
      AIESEC video and developing future recruitment strategies. For the past two semesters, we created 
      recruitment materials (fliers, poster, and emails) to use for recruitment.  In addition, ER has 
      gotten opportunities for AIESEC to be promoted at other student organizations’ events such as OS 
      Career Night, WASSUP CHINA, Celebrasia, and International Center’s Panel. For the winter semester, 
      we planned several training/workshops for our team members such as Photoshop/Illustrator training 
      and a web design workshop. Furthermore, ER has been heavily involved with marketing the Summer 
      National Conference (SNC), from PowerPoint to the official website.
      </p>
      <p style = "text-align: left;">
      I am very proud of the External Relations team; they really put the “er” in “AIESECer”! Thank you 
      team for a wonderful year! Keep up the great work!
      <br /><br /><br />
      -Katie Zhang
      </p>
      <br />
      <?php 
      
      $image[0] = 'images/teams/er/aarongomes.jpg';
      $thumb[0] = 'images/teams/er/aarongomes_small.jpg';
      $name[0] = 'Aaron Gomez';
      $image[1] = 'images/teams/er/ashwin.jpg';
      $thumb[1] = 'images/teams/er/ashwin_small.jpg';
      $name[1] = 'Ashwin Chandra';
      $image[2] = 'images/teams/er/lizlai.jpg';
      $thumb[2] = 'images/teams/er/lizlai_small.jpg';
      $name[2] = 'Liz Lai';
      $image[3] = 'images/teams/er/howard.jpg';
      $thumb[3] = 'images/teams/er/howard_small.jpg';
      $name[3] = 'Howard Lau';
      $image[4] = 'images/teams/er/justin.jpg';
      $thumb[4] = 'images/teams/er/justin_small.jpg';
      $name[4] = 'Justin McCandless';
      $image[5] = 'images/teams/er/kim.jpg';
      $thumb[5] = 'images/teams/er/kim_small.jpg';
      $name[5] = 'Kim Grambo';
      $image[6] = 'images/teams/er/laurabiltz.jpg';
      $thumb[6] = 'images/teams/er/laurabiltz_small.jpg';
      $name[6] = 'Laura Biltz';
      $image[7] = 'images/teams/er/micaela.jpg';
      $thumb[7] = 'images/teams/er/micaela_small.jpg';
      $name[7] = 'Micaela McCabe';
      $image[8] = 'images/teams/er/michael.jpg';
      $thumb[8] = 'images/teams/er/michael_small.jpg';
      $name[8] = 'Michael Chan';
      $image[9] = 'images/teams/er/nieri.jpg';
      $thumb[9] = 'images/teams/er/nieri_small.jpg';
      $name[9] = 'Nieri Avanessian';
      $image[10] = 'images/teams/er/sandra.jpg';
      $thumb[10] = 'images/teams/er/sandra_small.jpg';
      $name[10] = 'Sandra Fadel';
      
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
