<?php

include("functions_db.php");

// echoes an awesome table of pictures with links to the big version, given arrays of big & little pics
function picTable ($image, $thumb, $name)
{
  echo '      <table id = "picTable">' . "\n";
  $i = 0;
  foreach ($image as $pic)
  {  $size = getimagesize($image[$i]);
     $size[0] = $size[0] + 20;
     $size[1] = $size[1] + 80;
       
     if (!($i % 2))
       echo '      <tr>' . "\n";
     echo "      <td><a onClick = \"javascript:window.open('" . $image[$i] . "', 'popup', 'height = " . $size[1] . ", width = " . $size[0] . "');\">\n";
     echo '          <img src = "' . $thumb[$i] . '"></a></td>' . "\n";
     if ((($i % 2) && $i) || ($i == (count($image) - 1)))
     { echo '      </tr>' . "\n";
       if ($name[0])
       { echo '      <tr>' . "\n";
         if (($i != (count($image) - 1)) || ($i % 2))
           echo '      <td>' . $name[$i - 1] . '</td>' . "\n";
         echo '      <td>' . $name[$i] . '</td>' . "\n";
         echo '      </tr>' . "\n";
       }
     }
     $i++;
  }
    echo '      </table>' . "\n";
}

// echoes the page's comments
function comments($address)
{
   for ($i = 0; $i < getRows('yearbookComments'); $i++)
   {
      $DATA = getdb($i ,'yearbook');

      if ($address == $DATA['address'])
      {
         echo "      <p>\n";

         echo removehtml($DATA['comment']);

         echo "      </p>\n";
         echo "      <small>Posted By: <i>";

         echo removehtml($DATA['name']);

         echo "      </i></small>\n";
         echo "      <br><br>\n";
      }
   }
}

// Updates the pages and the member's profiles.  Passing a 1 for $what gives pages, a 2 gives profiles
function update($address, $name, $comment)
{
      $apost = "'";
      $apostcom = "\\'";
      $comment = str_replace($apost,$apostcom,$comment);								// Fixes murderous apostrophe error
	
      updateComment($address, $name, $comment);           

}

// Removes all html tags from the input.  Stolen from my GTTT project.
function removehtml($text)
{
   $text = "&nbsp;" . $text;																			// Prevents the whole html at first character returning a 0 problem.   
   $gow = 1;
   while ($gow)
   {
      $gof = 1;   
      $here = strpos($text, "<");
      if (!$here)
      {  $gow = 0;
         $gof = 0;
      }
      for ($i = $here; (($gof) && ($i < strlen($text))); $i++)
      {
         if (substr($text, $i, 1) == '>')
         {
            $text = substr($text, 0, $here) . substr($text, ($i + 1), strlen($text));
            $gof = 0;
         }
         else
         {  $gof = 1;
         }
      }
   }
   return($text);
}

?>
