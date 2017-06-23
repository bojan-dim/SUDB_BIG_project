<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$db_name = "diary";

//create conn
$conn = mysqli_connect($servername, $username, $password, $db_name);
//check conn
if(!$conn) {
    die("Conn failed!" .mysql_connect_error());
}

//
$post_name = "";
$post_name = $_POST['post_name'];

// sql to delete a record
$query= "DELETE FROM posts WHERE PostName = ".$post_name."; ";

if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);
?>