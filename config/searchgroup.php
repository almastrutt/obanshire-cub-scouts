<?php

    require_once('db_connect.php');
    
    if (isset($_POST['badgegroup'])){
     $badgegroup=$_POST['badgegroup'];
    
    if ($badgegroup !="All"){
   
    $result=$db->prepare("SELECT * FROM tblBadges WHERE badgetype=:badgegroup");
    $result->bindParam(':badgegroup', $badgegroup);
    }else{
        $result = $db->prepare("SELECT * FROM tblBadges");
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
