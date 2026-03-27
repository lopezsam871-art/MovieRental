<?php include 'connect.php'; ?>

<form method="POST">
    Name: <input type="text" name="customer_name"><br>
    Item: <input type="text" name="item"><br>
    Rent Date: <input type="date" name="rent_date"><br>
    Return Date: <input type="date" name="return_date"><br>
    <button type="submit" name="submit">Add Rental</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['customer_name'];
    $item = $_POST['item'];
    $rent = $_POST['rent_date'];
    $return = $_POST['return_date'];

    $sql = "INSERT INTO rentals (customer_name, item, rent_date, return_date)
            VALUES ('$name', '$item', '$rent', '$return')";

    $conn->query($sql);

    echo "Rental added!";
}
?>