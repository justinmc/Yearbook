<?php 

// This file contains all of the low level functions that deal directly with the databases, ect.      
      
// Database Data //

$server = "aiesecmi.ipowermysql.com";
$username = "aiesecmi";
$password = "wolverine.2";
$db = "justin";
$table = "yearbookComments";												// yearbook 2010 comment table

// Functions //

function getdb ($index, $table)											// Accesses the database, given table at given row
{
   global $server, $username, $password, $db;

   $con = mysql_connect($server, $username, $password);
   if (!$con)
   {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db($db);

   $QUERY = mysql_query("SELECT * FROM `yearbookComments` WHERE CONVERT( `index` USING utf8 ) = $index");
   $DATA = mysql_fetch_array($QUERY);

   mysql_close($con);

   return ($DATA);
}

// Returns the number of rows in the given table
function getrows ($where)
{
   global $server, $username, $password, $db;

   $con = mysql_connect($server, $username, $password);
   if (!$con)
   {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db($db);
      
   $QUERY = mysql_query("SELECT * FROM $where");   
   $rows = 0;
   $rows = mysql_num_rows($QUERY);

   mysql_close($con);

   return ($rows);
}

function echoComment($filename)
{  global $server, $username, $password, $db;

   $con = mysql_connect($server, $username, $password);
   if (!$con)
   {
      die('Could not connect: ' . mysql_error());
   }

   mysql_select_db($db);

   $QUERY = mysql_query("SELECT * FROM yearbook WHERE address = '$filename'");

   $DATA = mysql_fetch_array($QUERY);
   echo $DATA['comment'] . "\n\n";

   mysql_close($con);
}

function echoName($filename)
{
   global $server, $username, $password, $db;

   $con = mysql_connect($server, $username, $password);
   if (!$con)
   {
      die('Could not connect: ' . mysql_error());
   }

   mysql_select_db($db);

   $QUERY = mysql_query("SELECT * FROM yearbook WHERE address = '$filename'");

   $DATA = mysql_fetch_array($QUERY);
   echo $DATA['comment'] . "\n\n";

   mysql_close($con);
}

function updateComment($address, $name, $comment)
{
   global $server, $username, $password, $db;

   $index = getrows('yearbookComments');

   $con = mysql_connect($server, $username, $password);
   if (!$con)
      die('Could not connect: ' . mysql_error());

   mysql_select_db($db);

   mysql_query("INSERT INTO `yearbookComments` ( `index` , `address` , `name` , `comment` ) VALUES ('$index', '$address', '$name', '$comment');");

   mysql_close($con);

   return 1;
}




?>
