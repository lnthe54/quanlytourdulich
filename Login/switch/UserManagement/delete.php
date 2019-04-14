<?php
 $server   = "localhost";   
 $username = "root";
 $password = "";    
 $dbname   = "quanlydulich";      

 $conn = mysqli_connect($server, $username, $password, $dbname);

 if (!$conn) {
     die("Không kết nối :".mysqli_connect_error());
     exit();
 }

$maKH = $_REQUEST['MaKH'];

$sql = "DELETE FROM tb_khachhang WHERE MaKH = '$maKH' ";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlytour/Login/success.php?action=user'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>