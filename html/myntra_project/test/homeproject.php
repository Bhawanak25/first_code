
  
<?php

include('config.php');
if (!isset($_SESSION['user_id'])) {
    header("Location: loginform.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PassHive - Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    
    body.home-page {
        padding-top: 50px;
       
        background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%); 
        color: #fff;
    }

    .profile-container {
      position: absolute;
      top: 15px; 
      right: 1200px; 
      z-index: 1000; 
    }

    .profile-icon-btn {
      cursor: pointer;
      color: white;
      font-size: 2.2em; 
      padding: 5px;
      border-radius: 50%; 
      background-color: rgba(0, 0, 0, 0.5);
      width: 45px; 
      height: 45px; 
      display: flex;
      justify-content: center; 
      align-items: center; 
    }

    .profile-popup {
      display: none; 
      position: absolute;
      top: 100%; 
      right: 0;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 15px;
      width: 200px; 
      color: #333; 
      text-align: left;
    }

    .profile-popup.show {
      display: block;
    }

    .profile-popup p {
      margin-bottom: 5px;
      font-size: 0.9em;
    }

    .profile-popup .logout-btn-in-popup {
      display: block;
      width: 100%;
      margin-top: 15px;
      padding: 8px 15px;
      background-color: #dc3545; 
      color: white;
      text-align: center;
      border: none;
      border-radius: 4px;
      text-decoration: none;
      font-size: 0.95em;
    }

    .profile-popup .logout-btn-in-popup:hover {
        background-color: #c82333;
    }

    /* Styles for the blocks */
    .block {
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
    }

    .block:hover {
        transform: translateY(-5px);
    }

    .hub-icon, .hub-icon-gen {
        width: 80px;
        height: 80px;
        margin-bottom: 15px;
        filter: invert(100%);
    }

    .link-text {
        color: white; 
        font-weight: bold;
    }
  </style>
</head>

<body class="home-page">

  <div class="profile-container">
    <div class="profile-icon-btn" id="openProfileBtn">
      <i class="fas fa-user-circle"></i>
    </div>

    <div class="profile-popup" id="profilePopup">
      <p><strong>Email:</strong><br><?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
      <?php
        // Display user_name if it exists and is different from email
        if(isset($_SESSION['user_name']) && $_SESSION['user_name'] != $_SESSION['user_email']):
      ?>
          <p><strong>Name:</strong><br><?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
      <?php endif; ?>
      <a class="logout-btn-in-popup" href="logout.php">Logout</a>
    </div>
  </div>

  <h1 class="logo-text text-light mt-5 text-center">PassHive</h1>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-4 col-md-6 col-12 block mx-lg-3 text-light">
        <a href="viewdata.php" class="text-decoration-none d-flex flex-column align-items-center">
          <img src="img/homeproject1img.png" alt="password-hub" class="hub-icon">
          <h4 class="link-text">Password Hub</h4>
        </a>
      </div>

      <div class="col-lg-4 col-md-6 col-12 block mx-lg-3 text-light">
        <a href="generate.php" class="text-decoration-none d-flex flex-column align-items-center">
          <img src="img/passhiveimg.png" alt="generator-icon" class="hub-icon-gen">
          <h4 class="link-text">Password Generator</h4>
        </a>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#openProfileBtn').click(function (event) {
        event.stopPropagation();
        $('#profilePopup').toggleClass('show');
      });

      $(document).on('click', function (event) {
        if (!$(event.target).closest('#profilePopup').length && !$(event.target).closest('#openProfileBtn').length) {
          $('#profilePopup').removeClass('show');
        }
      });
    });
  </script>
</body>

</html>