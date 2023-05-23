<?php
require_once('./init.php');
$admin = new Admin;

if(isset($_POST['key'])){
    $id = $_POST['key'];

    if ($admin->deleteUser($id)) {
        echo "User with ID $id deleted successfully";
    } else {
        echo "Error deleting user with ID $id";
    }
    
} else {
    echo 'did not work';
}

?>