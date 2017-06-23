<?php
/*$name = $subject = $post_text = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = return_input($_POST["auth_name"]);
    $subject = return_input($_POST["subject"]);
    $post_text = return_input($_POST["diary_post"]);
} */
// define variables and set to empty values
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

if (isset($_POST['post_name'])) {
    $post_name = $_POST['post_name'];
}

if (isset($_POST['auth_name'])) {
    $auth_name = $_POST['auth_name'];
}

if (isset($_POST['subj_abr'])) {
    $subject = $_POST['subj_abr'];
}

if (isset($_POST['post_text'])) {
    $post_text = $_POST['post_text'];
}

echo $post_name, $post_name, $auth_name, $subject, $post_text;

?>