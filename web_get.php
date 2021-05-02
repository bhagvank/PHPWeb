<?php
   if( isset($_GET["firstname"]) || isset($_GET["lastname"]) ) {
      echo "Welcome ". $_GET['firstname']. "<br />";
      echo "You are ". $_GET['lastname'];
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         First Name: <input type = "text" name = "firstname" />
         Last Name: <input type = "text" name = "lastname" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
