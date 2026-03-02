<?php

 include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PassHive - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css">
</head>

<body class="auth-page">

  <div class="container auth-container">
    <form method="post" action="login.php">
      <h3 class="bg-light">Login to PassHive</h3>

      <?php
      // Add this PHP block to display error messages
      if (isset($_SESSION['error'])) {
          echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['error']) . '</div>';
          unset($_SESSION['error']); // Clear the error after displaying it
      }
      ?>

      <div class="mb-4">
        <label class="mb-3">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
      </div>
      <div class="mb-4">
        <label class="mb-3">Password</label>
        <div class="input-group">
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password"
            required>
          <span class="toggle-visibility" onclick="toggleVisibility('password')">👁</span>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-info w-100">Login</button>
      <p class="text-center"><a href="#">Forgot Password?</a></p>
      <p class="text-center">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function toggleVisibility(fieldId) {
      const passwordField = document.getElementById(fieldId);
      const icon = passwordField.nextElementSibling;

      if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.textContent = "🙈"; // Changed to a "hide" icon for clarity
      } else {
        passwordField.type = "password";
        icon.textContent = "👁"; // Changed back to "show" icon
      }
    }
  </script>
</body>

</html>