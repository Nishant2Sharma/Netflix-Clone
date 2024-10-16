<?php
session_start();
    require 'conn.php';
    if(isset($_POST["Login_Btn"]))
    {
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $_SESSION['var'] = $_POST["username"];
        $sql = "SELECT * FROM Login WHERE username = '$user' ";
        $result = $conn -> query($sql);
        if(mysqli_num_rows($result)>0)
        {
            $row=mysqli_fetch_array($result);
            if($row["password"] == $pass)
            {
                header("Location: ../home_page/home_page.html");
            }
            else
            {
                echo "Incorrect Password \n";
            }
        }
        else 
        {
            echo "Username Not Found \n";    
        }
    }
    else 
    {
        echo "Session Cannot Be Created \n";
    }
?>