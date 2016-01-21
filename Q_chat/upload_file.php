<?php
 
 $targetfolder = "Q_media/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
 {
 
 echo "http://108.163.184.34/crowdeyes-parallax/Q_chat/Q_media/". basename( $_FILES['file']['name'])."";
 
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>