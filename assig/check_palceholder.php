<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample Form</title>
</head>
<body>
  <h1>Sample Form</h1>
  <form action="submit-form" method="POST">
    <!-- Grouping user details -->
    <fieldset>
      <legend>User Details</legend>
      
      <!-- Text input -->
      <label for="username">Full Name:</label>
      <input type="text" id="username" name="username" placeholder="Enter your full name" required>
      <br><br>

      <!-- Email input -->
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <br><br>

      <!-- Phone input with pattern validation -->
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
      <small>Format: 123-456-7890</small>
      <br><br>

      <!-- Password input -->
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter a secure password" required>
      <br><br>
      <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="18" max="120" required placeholder="Enter Age">
            <br><br>

            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            <br><br>

            <label for="terms">Agree to Terms and Conditions:</label>
            <input type="checkbox" id="terms" name="terms" required>
            <br><br>

            <legend>Gender</legend>
            <label for="male">Male:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="female">Female:</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="other">Other:</label>
            <input type="radio" id="other" name="gender" value="other">
            <br><br>

        </fieldset>

        <button type="submit">Submit</button>

    </form>

</body>
</html>
    
    
   