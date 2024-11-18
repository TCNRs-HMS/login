<?php
session_start();  // Move session_start to the very top to avoid issues

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('db.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username); // "s" means the parameter is a string

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "No user found with that username!";
    }

    // Close the prepared statement
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p><?php if (isset($error)) echo $error; ?></p>
    </form>
</div>

</body>
</html>
