 <?php
    if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $languages = $_POST["languages"] ?? [];
    $errors = [];

         // Validate username

        if (empty($username)) {
            $errors[] = "Username is required.";
        }

       // Validate email

        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }


        // Validate password
        
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