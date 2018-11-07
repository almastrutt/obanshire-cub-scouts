<?php

    require_once('db_connect.php');
    
    if(isset($_POST['badge'])) {
        $badge=$_POST['badge'];
        $group=$_POST['group'];
        
        $badge=$badge."%";
        
        if($group=="All"){
            $result=$db->prepare("SELECT * FROM tblBadges WHERE caption LIKE :badge");
            $result->bindParam(':badge', $badge, PDO::PARAM_STR);
        }else{
            $result=$db->prepare("SELECT * FROM tblBadges WHERE caption LIKE :badge AND badgetype=:group");
            $result->bindParam(':badge', $badge, PDO::PARAM_STR);
            $result->bindParam(':group', $group, PDO::PARAM_STR);
        };
        
        
        $result->execute();
        
        $rowcount=$result->rowCount();
        echo'<div class="recCount">[Badges:-'.$rowcount.']</div>';
        
        while($rows=$result->fetch(PDO::FETCH_NUM)){
            echo'<div class="badges">';
            echo'<img src="data:image/jpeg;base64,'.base64_encode($rows[4]).'" />';
            echo'<div class="desc">'.$rows[1].'</div>';
            echo'</div>';
        };
        
    };
?>