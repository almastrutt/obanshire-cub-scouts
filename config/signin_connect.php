<?php
    require_once('../config/db_connect.php');
    
    session_start();
    $errmsg_arr=array();
    $errflag=false;
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if($email =='')
    {
        $errmsg_arr[] = 'You must enter a valid email address';
        $errflag = true;
    }    

    if($password =='')
    {   
        $errmsg_arr[] = 'You must enter a valid password';
        $errflag = true;
    }   

    $result = $db->prepare("SELECT * FROM tblLogin WHERE email = :eeee AND password = :pppp");
    $result->bindParam(':eeee', $email);
    $result->bindParam(':pppp', $password);
    $result->execute();
    $rows=$result->fetch(PDO::FETCH_NUM);
  
    if($rows>0)
    {
        $_SESSION["ROLE"] = $rows[4];
        header("location: ../index.php");
        session_write_close();
    }else
    {
        $errmsg_arr[] = 'Email address and Password are not found';
        $errflag = true;
    }


    if($errflag){
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: ../hello_world.php"); 
    }

?>