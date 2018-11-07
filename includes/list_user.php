<?php

require_once('../config/db_connect.php');

?>

    <h2>List Users</h2>

        <div class="listdata">
            
            <table class="newuser">
            <caption>Account Details</caption>
            <thead>
                <tr>
                    <th style="width:5%">ID</th>
                    <th style="width:10%">Title</th>
                    <th style="width:20%">First Name</th>
                    <th style="width:20%">Last Name</th>
                    <th style="width:30%">Address</th>
                    <th style="width:15%">Home Tel</th>
                    
                </tr>
            </thead>
            
            <tbody>
                
                <?php
                    
                    $result=$db->query("SELECT * FROM tblUsers");
                    $result->execute();
                    while($rows = $result->fetch(PDO::FETCH_NUM)){
                        echo '<tr>';
                        echo '<td>'.$rows[0].'</td>';
                        echo '<td>'.$rows[1].'</td>';
                        echo '<td>'.$rows[2].'</td>';
                        echo '<td>'.$rows[3].'</td>';
                        echo '<td>'.$rows[4].'</td>';
                        echo '<td>'.$rows[6].'</td>';
                        echo '</tr>';
                    };
                
                
                ?>
                
            </tbody>
            
        </table>
        
    </div>    