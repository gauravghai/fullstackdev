<?php
include './config.php';

$query = "INSERT INTO contact (email, subject) VALUES ('".$_POST['emailAddress']."', '".$_POST['subjectField']."')";
$result = mysqli_query($link, $query);
?>