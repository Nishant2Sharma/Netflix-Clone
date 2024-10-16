<?php
session_start();
    require 'conn.php';
    if(isset($_POST["cp_btn"]))
    {
        $user = $_SESSION['var'];
        $password = $_POST["cp"];
        $sql = "UPDATE login SET password = '$password' WHERE username = '$user'";
        $result = $conn -> query($sql);
        header("Location: ../home_page/home_page.html");
    }
    else 
    {
        echo "Session Cannot Be Created \n";
    }
?>