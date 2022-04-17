<?php
    include("security.php")
?>

<html>

    <head>
        <title>Sign Up Here!</title>
    </head>

    <body>

        <!-- If logged in, show logged in options.-->
        <!-- If not, present login and sign up options.-->

        <?php     
            if (security_loggedIn()) {
                echo("You are logged in!");
                echo("<a href='update.php'> Update your login info here.</a>");
                echo("<a href='remove.php'> Delete your account here.</a>");

            }
            else {
                echo("You are not logged in yet.");
                echo("<a href='signup.php'> Sign up here.</a>");
                echo("<a href='login.php'> Log in here.</a>") ;       
            }
        ?>

    </body>
    
</html>