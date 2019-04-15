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
$name=$_REQUEST['TenTour'];
$price=$_REQUEST['Gia'];
$time=$_REQUEST['ThoiGian'];
$sale=$_REQUEST['GiamGiaTreEm'];
$img=$_REQUEST['img'];

$sql = "UPDATE tb_tourdulich SET TenTour = '$name', Gia = '$price', ThoiGian = '$time', GiamGiaTreEm = '$sale', img = '$img'
        WHERE MaTour = '$id' ";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlytour/Login/success.php?action=tour'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>