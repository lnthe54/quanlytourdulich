<?php
include('connect_mysql.php');

$user=$_REQUEST['email'];
$pass=$_REQUEST['pass'];

$sql = "INSERT INTO tb_khachhang (email, pass) VALUES ('$user','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlydulich/Login/success.php?action=user'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>