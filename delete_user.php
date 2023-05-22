<?php
require_once('./init.php');
$admin = new Admin;

if(isset($_POST['key'])){
    $admin->deleteUser($_POST['key']);
}

?>