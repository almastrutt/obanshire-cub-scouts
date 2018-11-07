<?php
    require_once('config/db_connect.php');
    include('includes/header.php');
    
?>
<div id="wrapperbadges">
     
    <h2>Badges</h2>
            
    <input type="button" value="Print" id="printbadges"/>
    <input type="text" placeholder="search badge..." id="searchbadge" autofocus="autofocus"/>
            
    <select id="badgegroup">
        <option value="All">All</option>
        <option value="Core badges">Core badges</option>
        <option value="Challenge Awards">Challenge Awards</option>
        <option value="Activity Badges">Activity Badges</option>
        <option value="Staged Activity Badges">Staged Activity Badges</option>
    </select>    
            
    <div id="displaybadge">
                
        <?php
            
            $result=$db->prepare("Select * FROM tblBadges");
            $result->execute();
                
            $rowcount=$result->rowCount();
            echo'<div class="recCount">[Badges:-'.$rowcount.']</div>';                
                
            while($rows=$result->fetch(PDO::FETCH_NUM)){
                echo '<div class="badges">';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($rows[4]).'" />';
                echo '<div class="desc">'.$rows[1].'</div>';
                echo '</div>';
            };
                
        ?>
            
    </div>
        
        

</div>    
    
<?php
    include('includes/footer.php');
?>                  