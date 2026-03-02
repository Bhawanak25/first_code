
<?php
include('config.php');
include('function.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PassHive - Sign Up</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  
</head>

<body class="auth-page">
  <div class="container auth-container">
    <form method="post" action="register_process.php"> <h3 class="bg-light">Create Your PassHive Account</h3>
      <p class="top-text">
        Set a strong & memorable master password.<br>
        We don’t store it, so make sure you <b>remember it</b>.
        It’s the last password you’ll ever need.
      </p>

      <?php
      // Add this PHP block to display error or success messages
      if (isset($_SESSION['error'])) {
          echo '<div class="alert alert-danger" role="alert">' . htmlspecialchars($_SESSION['error']) . '</div>';
          unset($_SESSION['error']); // Clear the error after displaying it
      }
      if (isset($_SESSION['success'])) {
          echo '<div class="alert alert-success" role="alert">' . htmlspecialchars($_SESSION['success']) . '</div>';
          unset($_SESSION['success']); // Clear the success message after displaying it
      }
      ?>

      <div class="mb-4">
        <label class="mb-3">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-4">
        <label class="mb-3">Master Password</label>
        <div class="input-group">
          <input type="password" name="password" id="masterPassword" class="form-control"
            placeholder="Master Password" required>
          <span class="toggle-visibility" onclick="toggleVisibility('masterPassword')">👁</span>
        </div>
      </div>
      <div class="mb-4">
        <label class="mb-3">Confirm Master Password</label>
        <div class="input-group">
          <input type="password" name="cpassword" id="confirmMasterPassword" class="form-control"
            placeholder="Confirm Master Password" required>
          <span class="toggle-visibility" onclick="toggleVisibility('confirmMasterPassword')">👁</span>
        </div>
      </div>
      <button type="submit" class="btn btn-info w-100" name="submit">Sign Up - It's Free</button>
      <p class="text-center">Already have an account? <a href="loginform.php">Login</a></p>
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