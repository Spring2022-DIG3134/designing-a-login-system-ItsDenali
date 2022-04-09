<?php
// Import the security file so you can call its functions
    include("security.php")
?>

<html>

    <head>
        <title>Sign Up Here!</title>
    </head>

<body>

    <p>Please enter your information below:</p>

    <form action="signup.php" method="POST">

        <label for="username">Username<label>

        <input type="text" name="username" id="username">

        <label for="password">Password<label>

        <input type="text" name="password" id="password">

        <input type="submit" name="submit" value="Submit">

    </form>


    <?php

    // Call the validation and addNewUser functions from
    // security.php, which are imported at the very top.

    if (security_validate()) 
        security_addNewUser();
    ?>

</body>
</html>
