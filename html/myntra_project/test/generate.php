<?php
include('config1.php'); 
include('function1.php'); 

// Protect this page
if (!isset($_SESSION['user_id'])) {
    header("Location: loginform.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PassHive - Password Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
        color: #fff;
        margin: 0;
        padding: 0;
        text-align: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .container {
        max-width: 1000px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 15px;
        color: white;
        box-shadow: 0px 0px 20px white;
        background-color: rgba(0, 0, 0, 0.4); 
    }

    h1 {
        margin-bottom: 25px;
        font-size: 2em;
        color: #f1c40f;
    }

    .settings label {
        display: block;
        margin: 10px 0;
        text-align: left;
    }

    .settings input[type="number"] {
        width: 60px;
        margin-left: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        color: #333; 
    }

    .settings button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #75179aff;/
        border: none;
        color: white;
        font-weight: bold;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .settings button:hover {
        background-color: #5a0e7d; 
    }

    .output {
        margin-top: 25px;
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .output input {
        width: 70%;
        padding: 10px;
        border-radius: 8px;
        border: none;
        font-size: 1em;
        color: #333;
    }

    .output button {
        padding: 10px 15px;
        background-color: #75179aff;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        color: white;
        transition: background-color 0.3s ease;
    }
    .output button:hover {
        background-color: #5a0e7d;
    }


    h2 {
        font-size: 1.8em;
        margin-top: 40px;
        margin-bottom: 20px;
        color: #f1c40f; 
    }

    .input-group {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        margin-bottom: 30px;
    }

    .input-group input {
        padding: 10px;
        font-size: 1em;
        width: 250px;
        border: 1px solid #ccc;
        border-radius: 5px;
        color: #333;

    .input-group button {
        padding: 10px 15px;
        font-size: 1em;
        border: none;
        background-color: #6f238eff; 
        color: white;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .input-group button:hover {
        background-color: #5a0e7d;
    }

    /* Style for messages */
    .alert {
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        font-weight: bold;
    }
    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
    </style>
    <script>
    function generatePassword() {
        const length = document.getElementById('length').value;
        const includeUppercase = document.getElementById('uppercase').checked;
        const includeLowercase = document.getElementById('lowercase').checked;
        const includeNumbers = document.getElementById('numbers').checked;
        const includeSymbols = document.getElementById('symbols').checked;

        const upper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        const lower = "abcdefghijklmnopqrstuvwxyz";
        const nums = "0123456789";
        const symbs = "!@#$%^&*()_+~`|}{[]:;?><,./-="; // Added more symbols for stronger passwords

        let allChars = "";
        if (includeUppercase) allChars += upper;
        if (includeLowercase) allChars += lower;
        if (includeNumbers) allChars += nums;
        if (includeSymbols) allChars += symbs;

        if (allChars.length === 0) {
            alert("Please select at least one character type for password generation.");
            return;
        }

        let password = "";
        for (let i = 0; i < length; i++) {
            password += allChars.charAt(Math.floor(Math.random() * allChars.length));
        }

        document.getElementById('generatedPasswordResult').value = password;
        document.getElementById('passwordToSave').value = password; // Populate the save password field
    }

    function copyPassword() {
        const result = document.getElementById('generatedPasswordResult');
        result.select();
        result.setSelectionRange(0, 99999); /* For mobile devices */
        document.execCommand("copy");
        alert("Password copied to clipboard! ✅");
    }
    </script>
</head>

<body>
    <div class="container">
        <h1>🔐 Welcome to Passhive</h1>

        <div style="text-align: left; margin-bottom: 20px;">
            <a href="homeproject.php" class="btn btn-secondary">← Back to Home</a>
            <a href="viewdata.php" class="btn btn-info">View Saved Passwords ➡</a>
        </div>


        <div class="settings">
            <label>Password Length:
                <input type="number" id="length" min="4" max="32" value="12" />
            </label>

            <label><input type="checkbox" id="uppercase" checked /> Uppercase (A-Z)</label>
            <label><input type="checkbox" id="lowercase" checked /> Lowercase (a-z)</label>
            <label><input type="checkbox" id="numbers" checked /> Numbers (0-9)</label>
            <label><input type="checkbox" id="symbols" checked /> Symbols (@#$%)</label>

            <button onclick="generatePassword() ">Generate Password</button>
        </div>

        <div class="output">
            <input type="text" id="generatedPasswordResult" readonly placeholder="Your password will appear here" />
            <button onclick="copyPassword()">📋 Copy</button>
        </div>


        <div>
            <h2>Your Own Password Manager</h2>

            <?php
            // Display error or success messages
            if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['error']) . '</div>';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['success'])) {
                echo '<div class="alert alert-success">' . htmlspecialchars($_SESSION['success']) . '</div>';
                unset($_SESSION['success']);
            }
            ?>

            <div class="input-group">
                <form method="post" action="generateregister.php">
                    <input type="text" id="site" name="url" placeholder="Enter website URL" required />
                    <input type="text" id="username" name="username" placeholder="Enter Username" required />
                    <input type="text" id="passwordToSave" name="password" placeholder="Enter Password (or use generated)" required />
                    <button type="submit" name="submit">💾 Save</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>