<?php
    require_once("../partials/connection.php");
    if(!empty($_POST)){
        $fname = $_POST['fname'];
        $address = $_POST['address'];
        $subject = $_POST['subject'];
        $message = $_POST['msg'];
        $sql = "INSERT INTO contacts (fullname, mail, subjects, messages)
        VALUES ('$fname' ,'$address', '$subject', '$message')";
        $result = mysqli_query($conn, $sql);
    }
?>