<?php
    //Import the security file to use the deleteUser function
    include("security.php")
    security_updatePassword();
?>

<html>

    <body>

    <?php     
        if (security_loggedIn()) {
    
            echo("<h2>Enter your username, password, and what you want your new password to be.</h2>");
            
            echo("<br></br>");

            echo("<form action='update.php' method='POST'>");
            echo("<label>Username</label>");
            echo("<input type='text' name='username'> </input>");
                
            echo("<br></br>");

            echo("<label>Password</label>");
            echo("<input type='text' name='password'></input>");
            
            echo("<br></br>");

            echo("<label>New Password</label>");
            echo("<input type='text' name='newPassword'></input>");

            echo("<br></br>");

            echo("<input type='submit'></input>");

            echo("</form>");
        }
        else{
            echo("<a href='signup.php'> You need to be signed in for this page. Sign up here.</a>");
        }
    ?>
    </body>

</html>