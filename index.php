<?php include 'config.php'; ?>

<h2>🎬 Movie Rental</h2>

<a href="login.php">Login</a> | 
<a href="register.php">Register</a>

<hr>

<h3>Available Movies</h3>

<?php
$result = $conn->query("SELECT * FROM movies");

while ($row = $result->fetch_assoc()) {
    echo "<p>
        {$row['title']} ({$row['genre']}) - ₱{$row['price']} 
        | Stock: {$row['stock']}
    </p>";
}
?>