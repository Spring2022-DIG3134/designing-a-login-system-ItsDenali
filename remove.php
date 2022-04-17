<?php
    //Import the security file to use the deleteUser function
    include("security.php")
    security_deleteUser();
?>

<html>

    <body>

    <?php     
        if (security_loggedIn()) {
            
            echo("<h2>Enter your username and password below to remove them from our system.</h2>");
        
            echo("<br></br>");

            echo("<form action='remove.php' method='POST'>");
            echo("<label>Username</label>");
            echo("<input type='text' name='username'> </input>");
            
            echo("<br></br>");

            echo("<label>Password</label>");
            echo("<input type='text' name='password'></input>");
           
            echo("<br></br>");

            echo("<input type='submit'></input>");

            echo("</form>");
        }
        else {
            echo("<a href='signup.php'> Sign up here.</a>");
        }
    ?>

    </body>

</html>