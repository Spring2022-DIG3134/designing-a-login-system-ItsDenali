<?php
// Import the login file to enable logging back in
    include("login.php")
?>


<html>

    <head>
        <title>Logging Out...</title>
    </head>

<body>

<?php     
    if (security_loggedIn()) {
    echo("<p>You have been logged out.</p>");
    echo("<p>Have a nice day!</p>");

    echo("<a href='login.php'> Click to Log Out</a>");
    }
    else{
        echo("<a href='index.php'> Main Menu</a>");
    }

?>

</body>
</html>