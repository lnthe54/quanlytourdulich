<?php
include('connect_mysql.php');

$id = $_REQUEST['MaKH'];

$sql = "DELETE FROM tb_khachhang WHERE MaKH = '$id' ";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlydulich/Login/success.php?action=user'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>