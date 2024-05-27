<?php
include 'config.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. " - Quantity: " . $row["quantity"]. " - Price: $" . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
