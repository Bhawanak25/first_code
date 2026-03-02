
<?php

include('config.php');
include('function.php');

if(isset($_POST['submit'])) { 
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Validate if all fields are filled
    if(!empty($email) && !empty($password) && !empty($cpassword)) {
        // Validate email format (assuming EmailValidation() is in function.php)
        if(EmailValidation($email)) {
            // Check if passwords match
            if($password === $cpassword) { // Use === for strict comparison

                // --- Check for Duplicate Email ---
                $stmt_check = mysqli_prepare($conn, "SELECT id FROM tbl_register WHERE email = ?");
                mysqli_stmt_bind_param($stmt_check, "s", $email);
                mysqli_stmt_execute($stmt_check);
                mysqli_stmt_store_result($stmt_check);

                if (mysqli_stmt_num_rows($stmt_check) > 0) {
                    $_SESSION['error'] = "This email is already registered. Please log in or use a different email.";
                    header("Location: signup.php");
                    exit;
                }
                mysqli_stmt_close($stmt_check);

                // --- CRITICAL SECURITY STEP: HASH THE PASSWORD SECURELY ---
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $register_date = date('Y-m-d H:i:s'); // Use 'Y-m-d H:i:s' for standard datetime format
                $BrowserAgent = BrowserAgent(); // Get browser agent from function.php
                $user_ip = UserIP(); // Get user IP from function.php

                // Prepare the SQL statement for insertion to prevent SQL injection
                $stmt = mysqli_prepare($conn, "INSERT INTO tbl_register(email, password, register_date, browser_date, user_ip, status, flag) VALUES(?, ?, ?, ?, ?, ?, ?)");

                // Bind parameters: 's' for string, 'i' for integer etc.
                // Assuming 'status' and 'flag' are integers and default to 1 and 0 respectively
                $status = 1;
                $flag = 0;
                mysqli_stmt_bind_param($stmt, "sssssii", $email, $hashed_password, $register_date, $BrowserAgent, $user_ip, $status, $flag);

                if(mysqli_stmt_execute($stmt)) {
                    // Registration successful, log the user in automatically
                    $user_id = mysqli_insert_id($conn); // Get the ID of the newly inserted row

                    // Set session variables for the newly registered user
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['user_name'] = $email; // Assuming email can act as a display name if you don't have a separate name field in signup
                    $_SESSION['user_email'] = $email;

                    $_SESSION['success'] = "Thank you for registering! You are now logged in.";
                    header("Location: homeproject.php");
                    exit;
                } else {
                    $_SESSION['error'] = "Registration failed. Please try again later. (Database Error: " . mysqli_error($conn) . ")";
                    header("Location: signup.php");
                    exit;
                }
                mysqli_stmt_close($stmt); // Close the prepared statement

            } else {
                $_SESSION['error'] = "Your confirm password did not match.";
                header("Location: signup.php");
                exit;
            }
        } else {
            $_SESSION['error'] = "Please enter a valid email address.";
            header("Location: signup.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "Please fill in all blank fields.";
        header("Location: signup.php");
        exit;
    }
} else {
    // If someone tries to access register_process.php directly without submitting the form
    header("Location: signup.php");
    exit;
}
?>