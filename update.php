<?php
    //Import the security file to use the deleteUser function
    INCLUDE("security.php")
    security_updatePassword();
?>

<html>

    <body>

        <h2>Enter your username, password, and what you want your new password to be.</h2>
        
        <br></br>

        <form action="update.php" method="POST">
            <label>Username</label>
            <input type="text" name="username"> </input>
            
            <br></br>

            <label>Password</label>
            <input type="text" name="password"></input>
           
            <br></br>

            <label>New Password</label>
            <input type="text" name="newPassword"></input>

            <br></br>

            <input type="submit"></input>

        </form>

    </body>

</html>