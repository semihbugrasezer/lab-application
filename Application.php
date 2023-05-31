<!DOCTYPE html>
<html>

<head>
    <title>Student Registration Form</title>
</head>

<body>
    <h1>Student Registration Form</h1>
    <?php
    #Semih Bugra Sezer 2210205343 Computer Engineering I. %30
    $host = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($host, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create students_db database if it doesn't exist
    $createDBQuery = "CREATE DATABASE IF NOT EXISTS students_db";
    if (mysqli_query($conn, $createDBQuery)) {
        // Database created successfully
    } else {
        echo "<p>Error creating database: " . mysqli_error($conn) . "</p>";
    }

    // Select students_db database
    mysqli_select_db($conn, "students_db");

    // Create the students table if it doesn't exist
    $createTableQuery = "CREATE TABLE IF NOT EXISTS students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        full_name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        gender VARCHAR(10) NOT NULL
    )";
    if (mysqli_query($conn, $createTableQuery)) {
        // Table created successfully
    } else {
        echo "<p>Error creating table: " . mysqli_error($conn) . "</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        // Validate input
        if (!preg_match("/^[a-zA-Z ]*$/", $full_name)) {
            echo "<p>Error: Full name can only contain letters and white spaces.</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Error: Invalid email address.</p>";
        } else {
            // Prepare and bind SQL statement
            $stmt = $conn->prepare("INSERT INTO students (full_name, email, gender) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $full_name, $email, $gender);

            // Execute SQL statement
            if ($stmt->execute()) {
                echo "<p>Student registered successfully!</p>";
                // Redirect to prevent form resubmission
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "<p>Error: " . $stmt->error . "</p>";
            }

            // Close statement
            $stmt->close();
        }
    }
    ?>

    <table>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        <?php
        // Retrieve data from "students" table
        $sql = "SELECT full_name, email, gender FROM students";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['full_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No students registered yet.</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </table>

    <br>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>