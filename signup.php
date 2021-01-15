<?php
$showAlert = false;
$showError = false;

  if ($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'partials/database/_connect-in_database.php';

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];
    $exists = false;
    if(($password == $confirm_password) && $exists == false){
      $sql = "INSERT INTO `users` (`username`, `email`, `password`, `date_time`) VALUES ('$username', '$email', '$password', current_timestamp())";
      $result = mysqli_query($connect, $sql);
      if ($result){
        $showAlert = true;
      }
    }
    else{
      $showError = "Password do not match";
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hackosphere.Co</title>
  </head>
  <body>

    <?php
      require 'partials/body/nav/_nav-in_body.php';
    ?>

    <?php
    if($showAlert){

    echo ' <!-- Your account is created alert message for signup page start here -->
    <div class="alert alert-success" role="alert">
      <strong>Success </strong>Your account is created. Now you can <a href="signin.php" class="alert-link">Sign in</a>.
    </div>
    <!-- /Your account is created alert message for signup page end here --> ';

    }

    if($showError){

    echo ' <!-- Your account is created alert message for signup page start here -->
    <div class="alert alert-danger" role="alert">
      <strong>Error </strong> '. $showError.'
    </div>
    <!-- /Your account is created alert message for signup page end here --> ';

    }
    ?>

    <?php
      require 'partials/body/form/_signup-in_form-in_body.php';
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
