<?php
   if( isset($_POST["firstname"]) || isset($_POST["lastname"]) ) {
      if (preg_match("/[^A-Za-z'-]/",$_POST['firstname'] )) {
         die ("invalid firstname ");
      }
       
      if (preg_match("/[^A-Za-z'-]/",$_POST['lastname'] )) {
         die ("invalid lastname ");
      }   
      
      echo "Welcome ". $_POST['firstname']. "<br />";
      echo "Your last name is ". $_POST['lastname'];
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "POST">
         First Name: <input type = "text" name = "firstname" />
         Last Name: <input type = "text" name = "lastname" />
         <input type = "submit" name = "submit"/>
      </form>
      
   </body>
</html>
