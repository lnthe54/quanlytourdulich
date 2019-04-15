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
$name = $_POST['TenTour'];
$price = $_POST['Gia'];
$time = $_POST['ThoiGian'];
$sale = $_POST['GiamGiaTreEm'];
$img =  addslashes(file_get_contents($_FILES["img"]["tmp_name"]));  



$sql = "INSERT INTO tb_tourdulich VALUES (null, '$name', '$price', '$time', '$sale', '$img')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'http://localhost/quanlytour/Login/success.php?action=tour'</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>