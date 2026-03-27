<?php
include "connect.php";

    <h2>Rental List</h2>

    <a href="create.php">Add New</a>

    <table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Item</th>
        <th>Rent Date</th>
        <th>Return Date</th>
        <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM rentals");

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['customer_name']}</td>
            <td>{$row['item']}</td>
            <td>{$row['rent_date']}</td>
            <td>{$row['return_date']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>