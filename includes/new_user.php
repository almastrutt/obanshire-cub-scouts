<h2>Add User</h2>
    
<form method="POST" action="../config/insert_user.php">

    <table class="newuser">
        <caption>Account Details </caption>
        <thread>
            <tr>
                <th style="width:10%">Title</th>
                <th style="width:45%">First Name</th>
                <th style="width:45%">Last Name</th>
            </tr>
        </thread>
        <tbody>
            <tr>
                <td>
                    <select name="title" autofocus="autofocus">
                    <option value=""></option>
                    <option value="Mr">Mr</option>
                    <option value="Miss">Ms</option>
                    <option value="Mrs">Mrs</option>
                    </select>
                </td>
                <td><input type="text" name="fname" required="required"/></td>
                    <td><input type="text" name="lname" required="required"/></td>
                </tr>
            </tbody>
    </table>
    
    <table class="newuser">
        <thead>
            <tr>
                <th style="width:100%">Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" name="address" required= "required"></td>
            </tr>
        </tbody>
    </table>    
        
        <table class="newuser">
            <thead>
                <tr>
                    <th style="width:25%">Post Code</th>
                    <th style="width:25%">Home Number</th>
                    <th style="width:25%">Work Number</th>
                    <th style="width:25%">Mobile Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="pcode" required="required" maxlength="10"/></td>
                    <td><input type="tel" name="hometel" maxlength="15"/></td>
                    <td><input type="tel" name="worktel" maxlength="15"/></td>
                    <td><input type="tel" name="mobile" maxlength="15"/></td>
                </tr>
            </tbody>
        </table>
        
        <table class="newuser">
            <thead>
                <tr>
                   <th style="width:50%">Email Address</th>
                   <th style="width:25%">Role </th>
                   <th style="width:25%">Disclosure</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="email" name="email" required="required"/></td>
                    <td><input type="text" name="role" required="required"/></td>
                    <td><input type="checkbox" name="disclosure"/></td>
                </tr>
            </tbody>
        </table>
        
        <table class="newuser">
            <caption>Sign In Details</caption>
            <thead>
                <tr>
                    <th style="width:33.3%">Username</th>
                    <th style="width:33.3%">Password</th>
                    <th style="width: 33.3%">Confirm Password</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="username" requred="required"/></td>
                    <td><input type="password" name="password" requred="required"/></td>
                    <td><input type="password" name="confirm" requred="required"/></td>
                </tr>
            </tbody>
        </table>
        
        <input type="submit" name="insert" value="insert" id="submit-button"/>
        <input type="reset" name="reset" value="Reset" id="reset-button"/>
                    
</form>            