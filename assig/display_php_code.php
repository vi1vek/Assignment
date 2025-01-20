<!-- Create an HTML form with fields for name, email, and age. Write a PHP 
script to process the form using the POST method and display the submitted 
data.-->
<html>
<head>
    <title>Form Submission</title>
</head>
<body>
    <h2>Submit Your Information</h2>

    <form action="" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value = "submit" name = "submit">
    </form>

    <?php
	
  
    
    if (isset($_POST["submit"])) {
       
        $name = $_POST["name"];
        $email =$_POST["email"];
        $age = $_POST["age"];

       
        echo "<h3>Submitted Data:</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Age: $age<br>";
    }

    ?>
</body>
</html>
