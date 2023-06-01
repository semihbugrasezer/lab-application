<!DOCTYPE html>
<html>

<head>
    <title>HTML Form with Form Action</title>
    <style>
        h1 {
            color: green;
        }

        body {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>HTML Form with Form Action</h1>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process form data when the form is submitted using the POST method
    
        // Retrieve form data
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $address = $_POST['address'];

        // Display submitted data
        echo "<h2>Submitted Data</h2>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        echo "<p>Address: $address</p>";
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        First name:
        <input type="text" name="fname">
        <br> Last name:
        <input type="text" name="lname">
        <br> Address:
        <input type="text" name="address">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>