<html>
   <head>
      <title>Creating a file using PHP</title>
   </head>
   <body>
      <?php
         $textfile = "example.txt";
         $file = fopen( $textfile, "r" );
         if( $file == false ) {
            echo ( "Error : opening file" );
            exit();
         }
         $filesize = filesize( $textfile );
         $filetext = fread( $file, $filesize );
         fclose( $file );
         echo ( "File size : $filesize bytes" );
         echo ( "$filetext" );
         echo("file name: $textfile");
      ?>
   </body>
</html>
