<?php
   if(isset($_FILES['imagefile'])){
      $errors= array();
      $file_name = $_FILES['imagefile']['name'];
      $file_size =$_FILES['imagefile']['size'];
      $file_tmp =$_FILES['imagefile']['tmp_name'];
      $file_type=$_FILES['imagefile']['type'];
       $tmp = explode('.',$file_name);
       $file_ext=strtolower(end($tmp));
     # $file_ext=strtolower(end(explode('.',$_FILES['imagefile']['name'])));
       echo "file extension ".$file_ext;
      $extensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="this extension is not allowed, please choose a JPEG or PNG file.";
      }
      if($file_size > 2097152){
         $errors[]='File size should be equal to 2 MB';
      }
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"imagefiles/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="imagefile" />
         <input type="submit" name="submit"/>
      </form>
      
   </body>
</html>
