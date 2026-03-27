<?php
include 'db.php';

$movie_id = $_POST['movie_id'];

$conn->query("UPDATE rentals 
              SET return_date = NOW() 
              WHERE movie_id = $movie_id AND return_date IS NULL");

$conn->query("UPDATE movies SET available = 1 WHERE id = $movie_id");

header("Location: index.php");
