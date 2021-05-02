<html>
   
   <head>
      <title>email sending in PHP</title>
   </head>
   <body>
      <?php
         $to = "bhagvanarch@gmail.com";
         $subject = " subject";
         $message = "<b> HTML message.</b>";
         $message .= "<h1> headline.</h1>";
         $header = "From:bhagvank@gmail.com \r\n";
         $header .= "Cc:bhagvanarch@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $retval = mail ($to,$subject,$message,$header);
         if( $retval == true ) {
            echo "Message sent success...";
         }else {
            echo "Message  not  sent failure...";
         }
      ?> 
   </body>
</html>
