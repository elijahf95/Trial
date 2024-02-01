<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "user" && $password == "password") {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <h2>Login</h2>
    <form action="db.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <input type="submit" class="btn" value="Login">
    </form>
    </div>

    <?php

    $conn = new mysqli("localhost", "IPT", "", "student_db");

    $sql = 'SELECT * FROM accounts';

    $result = $conn->query($sql);

    ?>

    <div class="row">
        <table class="table table-border">
            <thread><table>
                <tr>
                    <th scope="col">number</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                </tr>
            </table>
        </thread>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>


    



</body>
</html>
