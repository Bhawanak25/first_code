<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PassHive - Password Vault</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"> </head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example">
  <nav class="navbar navbar-expand-lg fixed-top" id="navbar-example">
    <div class="container">
      <a class="navbar-brand" href="#">PassHive</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="#section1">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#section2">Features</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-why">Why PassHive</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-feedback">Feedback</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="header">
    <div class="container position-relative">
      <div class="header-buttons">
        <a href="loginform.php"><button type="button" class="btn btn-outline-light">Login</button></a>
        <a href="signup.php"><button type="button" class="btn btn-light">Sign Up</button></a>
      </div>

      <h1 class="display-4 mt-3">PassHive - Your Secure Password Vault</h1>
      <p class="lead">Secure. Reliable. Easy to Use.</p>
      <img src="img/passhiveimg.png" class="img-fluid mt-4"
        alt="Security Illustration">
    </div>
  </header>

  <section id="section1" class="section section-dark text-center">
    <div class="container">
      <h2>About PassHive</h2>
      <p>PassHive is your ultimate solution for storing and managing passwords securely using advanced encryption and
        automatic password generation. We provide a safe haven for all your digital keys.</p>
    </div>
  </section>

  <section id="section2" class="section text-center">
    <div class="container">
      <h2>Features</h2>
      <div class="row mt-4">
        <div class="col-md-4">
          <i class="fas fa-key fa-3x mb-3"></i>
          <h5>Robust Password Generator</h5>
          <p>Generate strong, unique, and highly secure passwords with a single click, ensuring maximum protection for
            your accounts.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-user-lock fa-3x mb-3"></i>
          <h5>Military-Grade Secure Storage</h5>
          <p>Your sensitive passwords are encrypted using industry-leading algorithms and stored securely, accessible
            only by you.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-sync-alt fa-3x mb-3"></i>
          <h5>Seamless Anytime, Anywhere Access</h5>
          <p>Effortlessly retrieve your passwords across all your devices, ensuring you're never locked out of your
            accounts.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="section-why" class="text-white text-center py-5">
    <div class="container">
      <h2 class="mb-4 text-white">Why Choose PassHive?</h2>
      <div class="row mt-4">
        <div class="col-md-4 mb-3">
          <i class="fas fa-lock fa-3x mb-3"></i>
          <h5>Uncompromising Security</h5>
          <p>We encrypt your data using military-grade security protocols, ensuring only you have access to your
            confidential information.</p>
        </div>
        <div class="col-md-4 mb-3">
          <i class="fas fa-bolt fa-3x mb-3"></i>
          <h5>Instant and Reliable Access</h5>
          <p>Access your saved passwords instantly and securely, anytime, from any device, without compromising on
            speed or safety.</p>
        </div>
        <div class="col-md-4 mb-3">
          <i class="fas fa-cogs fa-3x mb-3"></i>
          <h5>Advanced Password Management</h5>
          <p>Beyond generation, PassHive helps you organize, update, and manage all your passwords efficiently, making
            digital life simpler.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="section-feedback" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">We'd Love Your Feedback!</h2>
      <form>
        <div class="mb-3">
          <label class="mb-3">Your Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label class="mb-3">Your Email</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
        </div>
        <div class="mb-3">
          <label class="mb-3">Your Message</label>
          <textarea class="form-control" id="feedback" rows="5" placeholder="What do you think about PassHive?"
            required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </div>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-3">
          <h5>About PassHive</h5>
          <p>PassHive is a secure digital vault designed to manage your passwords safely with encryption, generator
            tools, and autofill convenience.</p>
        </div>
        <div class="col-md-3">
          <h5>Key Features</h5>
          <ul class="list-unstyled">
            <li><a href="#section2">Password Vault</a></li>
            <li><a href="#section2">Password Generator</a></li>
            <li><a href="#section2">Autofill Capabilities</a></li>
            <li><a href="#section2">Digital Wallet</a></li>
            <li><a href="#section2">Comprehensive Password Manager</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Useful Links</h5>
          <ul class="list-unstyled">
            <li><a href="#section1">How it Works</a></li>
            <li><a href="#section-why">Why Use PassHive?</a></li>
            <li><a href="#">Support</a></li> <li><a href="#section-feedback">Submit Feedback</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>Contact Us</h5>
          <p><i class="fa fa-envelope"></i> info@passhive.com</p> <p><i class="fa fa-phone"></i> +91 987 654 3210</p>
        </div>
      </div>
      <hr />
      <p class="mt-3">© 2025 PassHive. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>