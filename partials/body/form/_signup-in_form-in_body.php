<div class="container">
  <h1 class="text-center">Signup to our website</h1>

<!-- _Signup in _Form in _Body start here -->
<form action="signup.php" method="post">

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="UsernameHelp">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
    <div id="email-help" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="mb-3">
    <label for="confirm-password" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirm-password" name="confirm-password" aria-describedby="confirm-password-help">
    <div id="confirm-password-Help" class="form-text">Make sure to type the same password</div>
  </div>

  <button type="submit" class="btn btn-primary">Signup</button>

</form>
<!-- _Signup in _Form in _Body start here -->

</div>
