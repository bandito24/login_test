<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./index.css" rel="stylesheet">
</head>
<body>
   

    <form id="create-user-form" method="POST">
        <label for="new-username">Enter new username</label>
        <input id="new-username" type="text" name="new-username">
        <label for="new-password">Enter Password</label>
        <input id="new-password" type="text" name="new-password">
        <label for="confirm-passcode">Confirm Password</label>
        <input id="confirm-password" type="text" name="confirm-password">
        </br>
        <input type="submit">
    </form>

    <h2> or </h2>

    <form id="return-user-form" method="POST" action="./account_page.php">
    <label for="username">Enter username</label>
        <input id="username" type="text" value="john" name="username">
        <label for="password">Enter password</label>
        <input id="password" type="text" value="john" name="password">
        </br>
        <input type="submit">
    </form>

    <div id='return-all-users'>
    </div>

<script src='./index.js'></script>
</body>
</html>