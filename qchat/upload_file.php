<?php
 
 $targetfolder = "Q_media/";
 
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;

if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
 
 {
 
 echo "http://ec2-52-29-132-13.eu-central-1.compute.amazonaws.com/Q_chat/Q_media/". basename( $_FILES['file']['name'])."";
 
 }
 
 else {
 
 echo "Problem uploading file";
 
 }
 
 ?>