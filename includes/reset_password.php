<h2>Reset Password<h2/>

<form method="post action="../config/changepassword.php">
    <label for="email">Email Address</label>
    <input type="text" name="email" required="required" autofocus="autofocus"/>
    
    <label for="password">Password</label>
    <input type="password" name="password" required="required"/>
    
    <label for="confirmationpassword">Confirm Password</label>
    <input type="password" name="confirmpassword" required="required"/>
    
    <input type="submit" name"update" value"Update" id="submit-button"/>
    
    <div class="success"></div>
    
</form>
    
    
    
    