<?php
 
 $targetfolder = "Q_media/";
 
 //$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
 $targetfolder = $targetfolder . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
//if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
 {
 
 echo "<img src=' http://108.163.184.34/crowdeyes-parallax/Q_chat/Q_media/". basename( $_FILES['fileToUpload']['name'])." '>";
 
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>
 
 <form action="" method="post" enctype="multipart/form-data">
 
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
	
</form>