<?php
$show_alert = false;
$show_error = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { 
            include 'partials/database/connect/_connect-in_database.php';

            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm-password"];
            $exists = false;

                        if(($password == $confirm_password) && $exists == false)
                        {
                                $sql = "INSERT INTO `login` (`username`,`password`) VALUES ('$username','$password')";
                                $result = mysqli_query($connect, $sql);

                                        if ($result)
                                        {
                                                $show_alert = true;
                                        }
                        }
        else
        {
                $show_error = "Password do not match";
        }
  
    }
?>
