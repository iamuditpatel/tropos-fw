<form action="signin.php" method="post">
    <input type="text" id="username" name="username" placeholder="Username" required><br>
    <input type="password" id="password" name="password" placeholder="Password" required><br>
    <input type="submit" id="btn" name="submit" value="Signin">
</form>

<?php if(isset($error)): ?>
    <p><?php echo $error; ?></p>
    <?php endif; ?>

    <?php
    // Check if user is already logged in
    if(isset($_SESSION['username'])) {
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    }
?>
