<?php
   $channel = array('title' => "Title",
      'link' => 'http://www.whitecoats.com/',
      'description' => 'packages for clinics & doctors');
   
   print "<channel>\n";
   
   foreach ($channel as $element => $content) {
      print " <$element>";
      print htmlentities($content);
      print "</$element>\n";
   }
   
   print "</channel>";
?>