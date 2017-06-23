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

    $postname="";
    $postname = $_POST['post_name'];
    $sql = "SELECT PostName, AuthorName, SubjAbr, PostDate, Text FROM Posts WHERE PostName = ".$postname." ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "postName" . $row["PostName"].
                "AuthorName:" . $row["AuthorName"].
                "Subj" .$row["SubjAbr"].
                "Date:" .$row["PostDate"].
                "Text:" .$row["Text"].
                "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
?>