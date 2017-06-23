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
$post_name=$auth_name=$subject=$post_text="";

if (isset($_POST['auth_name'])) {
    $post_name = $_POST['auth_name'];
}

if (isset($_POST['auth_email'])) {
    $post_name = $_POST['auth_email'];
}


echo $post_name, $post_name, $auth_name, $subject, $post_text;

?>