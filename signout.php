<?php

    include('includes/header.php');

?>

        <div class="confirmation">
            <section>
                
                <h2>Sign Out</h2>
                <p>Are you sure you want to Sign out?</p>
                <form method="post" action="config/signout.php">
                    <input type="Submit" value="YES" name="yes"id="yes" />
                    <input type="Submit" value="NO" name="no"id="no" />                    
                </form>
                    
            </section>
                
        </div>
            
<?php

    include('includes/footer.php');
    
?>    