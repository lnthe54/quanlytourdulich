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

if(isset($_GET['export'])){
    if($_GET['export'] == 'true'){
    $query = mysqli_query($conn, 'select MaKH, email, pass from tb_khachhang');
     
     
        $delimiter = ",";
        $filename = "quanlydulich" . date('Ymd') . ".csv";
         
        $f = fopen('php://memory', 'w'); 
         
        $fields = array('ID', 'Username', 'Password');
        fputcsv($f, $fields, $delimiter);
         
        while($row = $query->fetch_assoc()){
            
            $lineData = array($row['MaKH'], $row['email'], $row['pass']);
            fputcsv($f, $lineData, $delimiter);
        }
         
        fseek($f, 0);
         
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
         
        fpassthru($f);
     
     }
}
?>