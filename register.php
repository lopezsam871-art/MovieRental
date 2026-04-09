<?php include 'connect.php'; ?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $conn->query("INSERT INTO users (name,email,password)
                  VALUES ('$name','$email','$pass')");

    echo "Registered successfully!";
}
?>