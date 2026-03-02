<?php

include('config.php');
 include('function.php'); 
// Check if the login form was submitted (using the 'submit' button's name)
if(isset($_POST['submit'])) { 
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {
        // Prepare the SQL statement to prevent SQL injection
        $stmt = mysqli_prepare($conn, "SELECT id, email, password FROM tbl_register WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Verify the provided password against the stored hashed password
            if (password_verify($password, $row['password'])) {
                // Password is correct! Set session variables.
                $_SESSION['user_id'] = $row['id'];
                // Check if 'name' key exists, otherwise default to email or empty string
                $_SESSION['user_name'] = isset($row['name']) ? $row['name'] : $row['email'];
                $_SESSION['user_email'] = $row['email'];

                // Redirect to the home page (homeproject.php)
                header("Location: homeproject.php");
                exit; // Always exit after a header redirect
            } else {
                // Invalid password
                $_SESSION['error'] = "Invalid email or password. Please try again.";
                header("Location: loginform.php");
                exit;
            }
        } else {
            // No user found with that email
            $_SESSION['error'] = "Invalid email or password. Please try again.";
            header("Location: loginform.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Please fill in all fields.";
        header("Location: loginform.php");
        exit;
    }
} else {
    // If someone tries to access login.php directly without submitting the form
    header("Location: loginform.php");
    exit;
}
?>