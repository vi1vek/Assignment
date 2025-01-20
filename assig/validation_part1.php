
<html>
<head>
       <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    
    <form method="POST" action="ass91.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="languages">Favourite Programming Languages:</label>
        <select id="languages" name="languages[]" multiple>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
            <option value="C++">C++</option>
        </select><br><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>
