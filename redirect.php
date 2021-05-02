<?php
   if( isset($_POST["site"]) ) {
      $location = $_POST["site"];
      header( "Location:$location" );
      exit();
   }
?>
<html>
   <body>
      <p>Select a website :</p>
      <form action = "<?php $_SERVER['PHP_SELF'] ?>" method ="POST">
         <select name = "site">.
            <option value = "http://www.whitecoats.com">
               White Coats
            </option>
            <option value = "http://www.lybrate.com">
               Lybrate
            </option>
         </select>
         <input type = "submit" />
      </form>
   </body>
</html>
