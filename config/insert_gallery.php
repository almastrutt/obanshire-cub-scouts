<?php
    require_once('../config/db_connect.php');
    
    if(isset($_POST['insert'])){
        
        $caption=$_POST['caption'];
        $name=$_FILES['file']['name'];
        $type=$_FILES['file']['type'];
        $data=file_get_contents($_FILES['file']['tmp_name']);
        
        $insert="INSERT INTO tblGallery (caption, filename, filetype, image) VALUES (:caption, :name, :type, :image)";
        
        $result=$db->prepare($insert);
        $result->bindParam(':caption', $caption);
        $result->bindParam(':name', $name);
        $result->bindParam(':type', $type);
        $result->bindParam(':image', $data);
        $result->execute();
        
        header("location: ../gallery.php");
        
        };


?>