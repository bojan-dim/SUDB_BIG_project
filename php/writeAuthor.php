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

//get_post_values;
$author_name=$author_email="";

//get subj values
if (isset($_POST['auth_nm'])) {
    $author_name = $_POST['auth_nm'];
}

if (isset($_POST['auth_eml'])) {
    $author_email = $_POST['auth_eml'];
}

$sql = "INSERT INTO authors (Name, Email)
VALUES (".$author_name.", ".$author_email.");";

if ($conn->query($sql) === TRUE) {
    echo "Author added successfully";
} else {
    echo "Author NOT :" . $conn->error;
}

?>