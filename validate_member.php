<?php
session_start();
require_once './init.php';

function checkLogin(){
    global $conn;
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $stmt = $conn->prepare("SELECT * FROM users_test2 WHERE username= ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        
        $user = $result->fetch_assoc();
    
        if(!is_null($user)){
            if($password === $user['password']){
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $user['username'];
            }   else {
                header('Location: index.php');
            }
    } else {
        header('Location: index.php');
    }
}
}


?>