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

//delete a post;
$subj_name = subj_abr = "";
$subj_abr = $_POST['subj_abr'];
$subj_name = $_POST['subj_name'];

// sql to delete a record
$query= "DELETE FROM posts WHERE Abr = ".$subj_abr." AND FullName = ".$subj_name."; ";

if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

mysqli_close($conn);
?>