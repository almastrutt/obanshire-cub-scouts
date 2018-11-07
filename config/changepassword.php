<?php
    require_once('../config/db_connect.php');
    
    if(isset($_POST['update'])){

        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirm=$_POST['confirmpassword'];
        
        if($password==$confirm){
            
            $updatepassword="UPDATE tblLogin SET password = :password WHERE email = :email";
            $resultuser=$db->prepare($updatepassword);
            $resultuser->bindParam(':email', $email);
            $resultuser->bindParam(':password', $password);
            $resultuser->execute();
            
            if($resultuser){
                    header("location:../sleader.php");
                
            }else{
                
                echo $resultuser;
            }
            
        }
        
    }    

?>