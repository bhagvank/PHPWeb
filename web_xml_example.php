<?php
libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
<user>John Smith</user>
<email>john@gmail.com</email>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
  echo "Error loading XML: ";
  foreach(libxml_get_errors() as $error) {
    echo "<br>", $error->message;
  }
} else {
  print_r($xml);
}
?>