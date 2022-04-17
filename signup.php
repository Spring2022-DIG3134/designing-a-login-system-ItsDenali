<?php
// Import the security file so you can call its functions
    include('security.php')
?>

<html>

    <head>
        <title>Sign Up Here!</title>
    </head>

<body>

<?php     
    if (security_loggedIn()) {
        echo("<a href='index.php'> Main Menu</a>");
    }

    else{
        echo("<p>Please enter your information below:</p>");
        
        echo("<form action='signup.php' method='POST'>");
        echo("<label for='username'>Username<label>");
        echo("<input type='text' name='username' id='username'>");
        echo("<label for='password'>Password<label>");
        echo("<input type='text' name='password' id='password'>");
        echo("<input type='submit' name='submit' value='Submit'>");
        echo("</form>");

        // Call the validation and addNewUser functions from
        // security.php, which are imported at the very top.
        if (security_validate()) 
            security_addNewUser();
        }
    }
?>

</body>
</html>
