<?php
   if( isset($_REQUEST["firstname"]) || isset($_REQUEST["lastname"]) ) {
      echo "Welcome ". $_REQUEST['firstname']. "<br />";
      echo "You are ". $_REQUEST['lastname'];
      exit();
   }
?>
<html>
   <body>
      
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         First Name: <input type = "text" name = "firstname" />
         Last Name: <input type = "text" name = "lastname" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
