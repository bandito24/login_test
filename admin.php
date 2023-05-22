<?php
include './init.php';




class Admin{

 public function displayUsers(){
    global $conn;
    $usersArray = [];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM users_test2";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $usersArray[$row['id']] = $row['username'] . " " . $row["password"];
        }
        echo json_encode($usersArray);
        
    } else {
        echo "no results found";
    }
}

public function deleteUser($key){
    global $conn;

    $sql = "DELETE FROM users_test2 WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $id = $key;
    $stmt->bind_param('i', $id);

    if($stmt->execute()){
        echo "User Deleted";
    } else {
        echo "Error deleting user: " . $stmt->error;
    }






}



}


?>