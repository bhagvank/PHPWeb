<?php
   session_start();
   
   if( isset( $_SESSION['value'] ) ) {
      $_SESSION['value'] += 1;
   }else {
      $_SESSION['value'] = 1;
   }
	
   $message = "You visited this web site ".  $_SESSION['value'];
   $message .= "in session.";
?>

<html>
   
   <head>
      <title>Creating a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $message ); ?>
   </body>
   
</html>
