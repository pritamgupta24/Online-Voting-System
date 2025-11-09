<?php
    session_start();
    if(isset($_SESSION["userdata"])){
        header("location: ../");
    }

?>

<html>
    <head>
        <title> Oline Voting System - Registration</title>
    </head>
    <body>
        <button>Back</button>
        <button>LogOut</button>
        <h1> Oline Voting System</h1>
        <hr>
        <div id="profile"></div>
        <div id ="Group"></div>

    </body>
</html>
