<nav>
        <ul>
                <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') {echo 'class="current"';} ?>><a href="index.php">About Us</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == 'gallery.php') {echo 'class="current"';} ?>><a href="gallery.php">Gallery</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == 'badges.php') {echo 'class="current"';} ?>><a href="badges.php">Badges</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == 'events.php') {echo 'class="current"';} ?>><a href="events.php">Events</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == 'volunteer.php') {echo 'class="current"';} ?>><a href="volunteer.php">Volunteer</a></li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == 'admin.php') {echo 'class="current"';} ?>></li>

                <?php
                  if(isset($_SESSION['ROLE'])) 
                  { 
                     if($_SESSION['ROLE'] == "Admin" || $_SESSION['ROLE'] == "Leader"){
                        echo '<li><a href="admin.php">Administration</a></li>';
                  //*      echo '<li><a href="parents.php">Access</a>';
                    } 
                    
               if($_SESSION['ROLE'] == "Parent")
               { 
               echo '<li><a href="parents.php">Access</a>';
               }
                  }
                ?>
                
                
                
                <?php
                    if(isset($_SESSION['ROLE']))
                    {
                        echo'<li style="float:right"><a href="signout.php">Sign Out</a></li>';
                    }else{
                        echo'<li style="float:right"><a href="signin.php">Sign In</i></a></li>';
                    }
                ?>    
        </ul>
</nav>