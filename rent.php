<?php include 'connect.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}

$movie_id = $_GET['id'];
$user_id = $_SESSION['user'];

$conn->query("INSERT INTO rentals (user_id, movie_id, rental_date)
              VALUES ('$user_id','$movie_id', NOW())");

$conn->query("UPDATE movies SET stock = stock - 1 
              WHERE movie_id='$movie_id'");

echo "Movie rented successfully! <a href='dashboard.php'>Back</a>";
?>