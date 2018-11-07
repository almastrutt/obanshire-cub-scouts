<?php

    require_once('../config/db_connect.php');

    if(isset($_POST['insert'])){

        $title=$_POST['title'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $address=$_POST['address'];
        $postcode=$_POST['pcode'];
        $hometel=$_POST['hometel'];
        $worktel=$_POST['worktel'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $role=$_POST['role'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $disclosure=$_POST['disclosure'];
    
        $insertuser = "INSERT INTO tblUsers (title, firstname, lastname, address,
                postcode, home_num, work_num, mobile, email, 
                role, username, disclosure)
                VALUE (:title, :fname, :lname, :address, :pcode, :hometel, 
                :worktel, :mobile, :email, :role, :username, :disclosure)";
    
        $insertlogin = "INSERT INTO tblLogin (username, password, email, role)
                VALUE (:username, :password, :email, :role)";
            
            
        $resultuser = $db->prepare($insertuser); 
        $resultuser->bindParam(':title', $title); 
        $resultuser->bindParam(':fname', $fname); 
        $resultuser->bindParam(':lname', $lname); 
        $resultuser->bindParam(':address', $address); 
        $resultuser->bindParam(':pcode', $pcode); 
        $resultuser->bindParam(':hometel', $hometel); 
        $resultuser->bindParam(':worktel', $worktel); 
        $resultuser->bindParam(':mobile', $mobile); 
        $resultuser->bindParam('email', $email); 
        $resultuser->bindParam(':role', $role); 
        $resultuser->bindParam(':username', $username);
        $resultuser->bindParam(':disclosure', $disclosure); 
        $resultuser->execute();
    
        $resultlogin = $db->prepare($insertlogin);
        $resultlogin->bindParam(':username', $username);
        $resultlogin->bindParam(':password', $password);
        $resultlogin->bindParam(':email', $email);
        $resultlogin->bindParam(':role', $role);
        $resultlogin->execute();
    
        header("location: ../admin.php");
    
    };

?>
    
    