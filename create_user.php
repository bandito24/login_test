<?php
include 'init.php';
$admin = new Admin;

$username = null;
$password = null;



if(isset($_POST['new-username']) && isset($_POST['new-password'])){
    $username = $_POST['new-username'];
    $password = $_POST['new-password'];


$stmt = $conn->prepare("INSERT INTO users_test2 (username, password) 
VALUES (?, ?)");
$stmt->bind_param('ss', $username, $password);

if($stmt->execute()){
    $admin->displayUsers();
} else {
    echo "Error inserting record: " . $stmt->error;
}

$stmt->close();
} else {
    echo "shit";
}


?>