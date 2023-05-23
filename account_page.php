<?php
session_start();
require_once './init.php';
checkLogin();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>It's all come down to this </h1>
<?php
echo $_SESSION['username'];
echo '</br>';
echo $_SESSION['password'];

?>
<body>
    
</body>
</html>