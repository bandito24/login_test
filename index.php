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
        <label for="username">Enter new username</label>
        <input id="username" type="text" name="username">
        <label for="Password">Enter Password</label>
        <input id="password" type="text" name="password">
        </br>
        <input type="submit">
    </form>

    <div id='return-all-users'>
    </div>

<script src='./index.js'></script>
</body>
</html>