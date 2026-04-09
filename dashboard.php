<?php include 'config.php'; 

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h2>Welcome!</h2>
<a href="logout.php">Logout</a>

<h3>Movies</h3>

<?php
$result = $conn->query("SELECT * FROM movies");

while ($row = $result->fetch_assoc()) {
    echo "<p>
        {$row['title']} - ₱{$row['price']}
        <a href='rent.php?id={$row['movie_id']}'>Rent</a>
    </p>";
}
?>