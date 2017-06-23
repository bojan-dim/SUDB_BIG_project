<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$db_name = "diary";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create authors table
$authors = "CREATE TABLE `diary`.`authors` (
  `id` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Name`));";

if (mysqli_query($conn, $authors)) {
    echo "authors table created successfully";
} else {
    echo "Error creating authors table" . mysqli_error($conn);
}

//sql to create subjects  table
$subjects = "CREATE TABLE `diary`.`subjects` (
  `Abr` VARCHAR(2) NOT NULL,
  `FullName` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Abr`));";

if (mysqli_query($conn, $subjects)) {
    echo "subjects table created successfully";
} else {
    echo "Error creating subjects table" . mysqli_error($conn);
}

//sql to create posts table
$posts = "CREATE TABLE `diary`.`posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `PostName` VARCHAR(45) NULL,
  `AuthorName` VARCHAR(45) NOT NULL,
  `SubjAbr` VARCHAR(2) NOT NULL,
  `Date` DATETIME NOT NULL,
  `Text` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `SubjAbr_idx` (`SubjAbr` ASC),
  INDEX `AuthorName_idx` (`AuthorName` ASC),
  CONSTRAINT `SubjAbr`
    FOREIGN KEY (`SubjAbr`)
    REFERENCES `diary`.`subjects` (`Abr`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `AuthorName`
    FOREIGN KEY (`AuthorName`)
    REFERENCES `diary`.`authors` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);";

if (mysqli_query($conn, $posts)) {
    echo "posts table created successfully";
} else {
    echo "Error creating posts  table" . mysqli_error($conn);
}

mysqli_close($conn);
?>