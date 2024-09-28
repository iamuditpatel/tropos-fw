<form action="signup.php" method="post">
    <input type="text" id="username" name="username" placeholder="Username" required><br>
    <input type="password" id="password" name="password" placeholder="Password" required><br>
    <input type="password" id="confirm-password" name="confirm-password" placeholder="confirm-password" required><br>
    <input type="submit" id="btn" value="Signup">
</form>

<?php if ($show_alert): ?>
        <div class="alert alert-success">Account Created Successfully!</div>
    <?php elseif ($show_error): ?>
        <div class="alert alert-danger"><?php echo $show_error ?></div>
    <?php endif; ?>
