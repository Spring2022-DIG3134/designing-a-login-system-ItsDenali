<?php
    //Import the security file to use the deleteUser function
    INCLUDE("security.php")
    security_deleteUser();
?>

<html>

    <body>

        <h2>Enter your username and password below to remove them from our system.</h2>
        
        <br></br>

        <form action="remove.php" method="POST">
            <label>Username</label>
            <input type="text" name="username"> </input>
            
            <br></br>

            <label>Password</label>
            <input type="text" name="password"></input>
           
            <br></br>

            <input type="submit"></input>

        </form>

    </body>

</html>