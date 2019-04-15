<!DOCTYPE html>
<html lang="en">
<head>
<style>
   a:link {
       color: white
   }
   <style>
div.overlay {
    background-color: rgba(0,0,0,.25);
    bottom: 0;
    display: center ;
    justify-content: center;
    left: 50%;
    width: 100%;
    position: relative;
    margin: 0 auto;
    top: 25%;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa User</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center text-success"><u>Quản Lý Người Dùng</u></h3>

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

        $id = "MaKH";
        $email = "email";
        $pass = "pass";

        $sql = "SELECT * FROM tb_khachhang WHERE MaKH = '$maKH' ";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
           $username = $row[$email];
           $password = $row[$pass];
        }

        $conn->close();
    ?> 

    <div>
        <form method="post" action = "updateUser.php?id=<?php echo $maKH?>" class="row container">
            <label class="col-4 text-warning font-weight-bold" style="margin-top:15px;">
                USERNAME: 
                <input type="text" name="email"  placeholder="Example: a@gmail.com"
                value = "<?php echo "$username" ?>"/>
            </label>
            <br>
            <label class="col-4 text-warning font-weight-bold" style="margin-top:15px;">
                PASSWORD: 
                <input type="text" name="pass"  placeholder=""  value = "<?php echo "$password" ?>" />
            </label> 
            <button type="submit" class="col-2 btn btn-warning" style="margin-top:15px;">Sửa Thông Tin</button>
        </form>
    </div> 

</body>
</html>