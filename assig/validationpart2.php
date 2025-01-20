<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <?php
    // Initialize variables
    $username = $email = $password = "";
    $errors = [];
    $selectedLanguages = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize and validate username
        $username = trim($_POST['username']);
        if (empty($username)) {
            $errors[] = "Username is required.";
        }

        // Sanitize and validate email
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        // Validate password
        $password = trim($_POST['password']);
        if (empty($password)) {
            $errors[] = "Password is required.";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
        }

        // Handle selected programming languages
        if (isset($_POST['languages'])) {
            $selectedLanguages = $_POST['languages'];
        } else {
            $errors[] = "Please select at least one programming language.";
        }

        // If no errors, process the form
        if (empty($errors)) {
            echo "<h3>Registration Successful!</h3>";
            echo "<p><strong>Username:</strong> $username</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Selected Languages:</strong> " . implode(", ", $selectedLanguages) . "</p>";
            // You can now save the $username, $email, $hashedPassword, and $selectedLanguages to a database.
        } else {
            echo "<h3>Errors:</h3>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }
    ?>

    <form method="POST" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <label for="languages">Favourite Programming Languages:</label><br>
        <select id="languages" name="languages[]" multiple>
            <option value="PHP" <?php echo in_array('PHP', $selectedLanguages) ? 'selected' : ''; ?>>PHP</option>
            <option value="JavaScript" <?php echo in_array('JavaScript', $selectedLanguages) ? 'selected' : ''; ?>>JavaScript</option>
            <option value="Python" <?php echo in_array('Python', $selectedLanguages) ? 'selected' : ''; ?>>Python</option>
            <option value="Java" <?php echo in_array('Java', $selectedLanguages) ? 'selected' : ''; ?>>Java</option>
            <option value="C++" <?php echo in_array('C++', $selectedLanguages) ? 'selected' : ''; ?>>C++</option>
        </select><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>
