<?php include 'connect.php'; 

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>
<div class="navbar">
    <th>Dashboard</th>
    <a href="#">Movies</a>
    <a href="#">Rent</a>
    <a href="#">Buy</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href="#">Service</a>
</div>

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