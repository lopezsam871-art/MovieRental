<?php include 'connect.php'; ?>

<form method="POST">
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    $user = $result->fetch_assoc();

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user'] = $user['user_id'];
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>