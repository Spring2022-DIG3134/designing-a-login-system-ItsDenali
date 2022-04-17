<?php
// Import the security file so you can call its functions
    include("security.php")

?>


<html>

    <head>
        <title>Log In Here!</title>
    </head>

<body>

<?php     
    if (security_loggedIn()) {
        echo("<a href='index.php'> Main Menu</a>");
    }

    else{
        echo("<p>Welcome!</p>");

        echo("<br/>");
        
        echo("<p>Please enter your username and password:</p>");

        echo("<form action='login.php' method='POST'>");
        echo("<label for='username'>Username<label>");
        echo("<input type='text' name='username' id='username'>");
        echo("<label for='password'>Password<label>");
        echo("<input type='text' name='password' id='password'>");
        echo("<input type='submit' name='submit' value='Submit'>");
        echo("</form>");

        // If login is correct, let the user log in
        if (security_validate())    {
            security_login();
        }else{}

        // Then finalize the login process and display a message
        if (security_loggedIn())    {
            echo("Thank you for logging in!");
            echo("<br/>");
            echo("What a nice, empty page...");

            //And create a link to run the log out program 
            echo("<a href='logout.php'> Click to Log Out</a>");
        }else{}

}
?>
</body>
</html>