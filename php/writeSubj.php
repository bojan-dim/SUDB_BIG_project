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
$subj_abr=$subj_name="";

//get subj values
if (isset($_POST['subabr'])) {
    $subj_abr = $_POST['subabr'];
}

if (isset($_POST['subj_name'])) {
    $subj_name = $_POST['subj_name'];
}

$sql = "INSERT INTO authors (Name, Email)
VALUES (".$subj_abr.", ".$subj_name.");";

if ($conn->query($sql) === TRUE) {
    echo "Subject added successfully";
} else {
    echo "Subj not added successfully: " . $conn->error;
}

?>