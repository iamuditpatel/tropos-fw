<?php require 'partials\database\connect\_connect-in_database.php'; ?>

<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
    exit();
}

// Retrieve username from session
$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php require 'partials/body/nav/_nav-in_body.php'; ?>
    <h1>Welcome to the Dashboard, <?php echo $username; ?></h1>
    <p>This is your dashboard content.</p>
</body>
</html>
