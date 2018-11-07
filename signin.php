<?php

    include('includes/header.php');

?> 

        <div class="wrappersignin">
    
            <section> 
                <div class="main-image">
                    <img src="images/cubscouts/sign_in_feather.jpg" alt="sign_in_feather.jpg"/>

                    <div class="login_form">
                        
                        <h1>Sign In</h1>                        
                            
                        <form method="post" action="config/signin_connect.php"> 
                        
                            <label for="email">Email Address</label> 
                            <input type="email" id="email" name="email" value=""placeholder="johndoe@example.com" required="required" autofocus="autofocus" />
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" value="" placeholder="**********" required="required" />
                            <a href="#">Forgot Password</a>
                            
                            <input type="submit" value="Sign In" id="submit-button" />
                        
                        </form> 

                    </div>

                </div>
            
            </section> 
        
        </div>  
        
<?php 
include('includes/footer.php');
?>