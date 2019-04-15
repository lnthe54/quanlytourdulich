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

$id = $_REQUEST['id'];
$user=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$sql = "UPDATE tb_khachhang SET email = '$user', pass = '$pass'
        WHERE MaKH = '$id' ";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlytour/Login/success.php?action=user'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>