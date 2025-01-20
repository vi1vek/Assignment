<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
</head>
<body>

    <form action="process_form.php" method="post">

        <fieldset>
            <legend>User Information</legend>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required placeholder="Enter Username">
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="Enter Password">
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter Email">
            <br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="XXX-XXX-XXXX"> 
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