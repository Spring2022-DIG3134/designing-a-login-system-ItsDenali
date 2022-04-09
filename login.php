<?php
// Import the security file so you can call its functions
    include("security.php")

?>


<html>

    <head>
        <title>Log In Here!</title>
    </head>

<body>

    <p>Welcome back!</p>
    <br/>
    <p>Please enter your username and password:</p>

    <form action="login.php" method="POST">

        <label for="username">Username<label>

        <input type="text" name="username" id="username">

        <label for="password">Password<label>

        <input type="text" name="password" id="password">

        <input type="submit" name="submit" value="Submit">

    </form>

<?php
    // If login is correct, let the user log in
    if (security_validate())    {
        security_login();
    }
    // Then finalize the login process and display a message
    if (security_loggedIn())    {
        echo("Thank you for logging in!");
        echo("<br/>")
        echo("What a nice, empty page...");


        //And create a link to run the log out program 
        echo("<a href='login.php'> Click to Log Out</a>")
    }
?>
</body>
</html>