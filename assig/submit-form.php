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
    </fieldset>
    
    <!-- Grouping preferences -->
    <fieldset>
      <legend>Preferences</legend>
      
      <!-- Date input -->
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" required>
      <br><br>

      <!-- Number input -->
      <label for="quantity">Number of Tickets:</label>
      <input type="number" id="quantity" name="quantity" min="1" max="10" required>
      <br><br>

      <!-- Checkbox -->
      <label for="subscribe">
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">
        Subscribe to Newsletter
      </label>
      <br><br>

      <!-- Radio buttons -->
      <p>Preferred Contact Method:</p>
      <label>
        <input type="radio" name="contact-method" value="email" required> Email
      </label>
      <label>
        <input type="radio" name="contact-method" value="phone" required> Phone
      </label>
      <br><br>
    </fieldset>

    <!-- Submit button -->
    <button type="submit">Submit</button>
  </form>
</body>
</html>
