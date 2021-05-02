<html>
   <body>   
      <?php
         $note=<<<XML
         <note>
            <to>John Smith</to>
            <from>Thomas Smith</from>
            <heading>Message </heading>
            <body>Message text </body>
         </note>
         XML;
         $xml=simplexml_load_string($note);
         print_r($xml);
      ?>		
   </body>
</html>
