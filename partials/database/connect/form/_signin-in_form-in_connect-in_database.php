<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form inputs
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query the database to check if the username exists
    // You should use prepared statements for this query
    $query = "SELECT * FROM login WHERE username = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User exists, fetch the row
        $user = $result->fetch_assoc();
        // Check if the entered password matches the stored password
        if ($password === $user['password']) {
            // Password is correct, set session variable and redirect to dashboard
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            // Password is incorrect, display error message
            $error = "Invalid username or password";
        }
    } else {
        // Username not found, display error message
        $error = "Invalid username or password";
    }
}
?>

