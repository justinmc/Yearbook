<!-- AIESEC Michigan Yearbook -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>

<?php

include $_SERVER['DOCUMENT_ROOT'].'/yearbook/scripts/functions_page.php';
   
$filename = "http://www.aiesecmichigan.com" . $_SERVER["PHP_SELF"];

$address = $_REQUEST["address"];

?>

<meta http-equiv="refresh" content="1; url=<?php echo $address; ?>">

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

<?php

$passwordC = $_REQUEST["passwordC"];
$name = $_REQUEST["name"];
$comment = $_REQUEST["comment"];


if ($passwordC != 'aiesec')
   echo "<h1>Incorrect password, returning...</h1>";
elseif (!$name || !$comment)
   echo "<h1>Incomplete comment, returning...</h1>";
else
{
   echo "<h1>Comment received, please wait...</h1>";   

   update($address, $name, $comment);
}

?>

</body>

</html>
