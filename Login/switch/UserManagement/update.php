<?php
include('connect_mysql.php');

$sql = "DELETE FROM Mtb_khachhang WHERE id=";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>