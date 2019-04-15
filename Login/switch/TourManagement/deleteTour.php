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

$maTour = $_GET['MaTour'];

$sql = "DELETE FROM tb_tourdulich WHERE MaTour = '$maTour' ";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlytour/Login/success.php?action=tour'</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>